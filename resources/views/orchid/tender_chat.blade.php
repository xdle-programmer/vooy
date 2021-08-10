<style>
    .auth {
        display: flex;
        padding-top: 50px;
        justify-content: center;
    }

    .auth .card {
        width: 400px;
    }

    .chat {
        display: flex;
        height: 55vh;
        width: 100%;
    }

    .chat-users {
        width: 300px;
        border: 1px solid #e0e0e0;
        margin: 0;
    }

    .actions {
        display: flex;
        text-align: center;
        align-items: center;
    }
    .actions > .btn{
        margin: 5px;
        height: 40px;
    }

    .chat-messages {
        border: 1px solid #e0e0e0;
        width: 100%;
        padding: 15px;
        overflow-y: auto;
    }

    .message {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    .message:hover{
        background-color: #ebebeb;
    }

    .declined{
        background-color: #ffd7e1;
    }
    .accepted{
        background-color: #d7ffe1;
    }

    .message-content {
        border-radius: 3px;
        padding: 6px 9px;
        font-size: 14px;
        max-width: 250px;
        background-color: rgba(235, 235, 235, 0.5);
    }

    .message.owner {
        justify-content: flex-end;
    }

    .message.owner .message-content {

    }

    .input-field {
        display: flex;

    }

    .chat-img {
        max-height: 100%;
        max-width: 100%;
    }

    .c-file-input {
        color: transparent;
    }

    .c-file-input::-webkit-file-upload-button {
        visibility: hidden;
    }

    .c-file-input::before {
        content: 'Select some files';
        color: black;
        display: inline-block;
        background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
        border: 1px solid #999;
        border-radius: 3px;
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        text-shadow: 1px 1px #fff;
        font-weight: 700;
        font-size: 10pt;
    }

    .c-file-input:hover::before {
        border-color: black;
    }

    .c-file-input:active {
        outline: 0;
    }

    .c-file-input:active::before {
        background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
    }

    .find-input {
        padding: 1rem !important;
        max-width: 600px !important;
    }

    .message-time {
        margin-top: 2px;
        font-size: 12px;
        opacity: 0.9;
    }

    .btn-hidden {
        display: none
    }

    .chat-textarea {
        padding-left: 60px;
    }

    .m-left-10 {
        margin-left: 2rem;
    }

    .file-block {
        margin-top: 1rem
    }

    #file-icon {
        cursor: pointer;
        margin-right: 5px;
    }

    #file-icon :hover {
        color: #ff6666 !important;
    }

    .msg-linked {
        color: #ff6666 !important;
    }

    .custom-file {
        position: absolute;
        width: 50px;
    }

    .custom-file .form-group {
        max-height: 70px;
    }

    .custom-file input[type=file] {
        outline: 0;
        opacity: 0;
        pointer-events: none;
        user-select: none
    }

    .custom-file .label {
        width: 50px;
        max-height: 70px;
        color: #58666e !important;
        /* border: 1px solid #e9ecef!important; */
        /*border-bottom-color: #e3e7eb;*/
        border-radius: 2px;
        /*box-shadow: 0 1px 1px rgba(90,90,90,.1);*/
        cursor: pointer;
        text-align: center
    }

    .custom-file .label i {
        display: block;
        font-size: 42px;
        padding-bottom: 16px
    }

    .custom-file .label i, .custom-file .label .title {
        color: grey;
        transition: 200ms color;
        padding-top: 10px;
    }

    .custom-file .label:hover {
        border: 2px;
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important;
        background-color: #fff !important;
        border-color: #e9ecef !important;
    }


</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<a class="btn  btn-secondary" href="{{url("admin/chats")}}">Назад</a>
<div class="bg-white rounded shadow-sm mb-3" data-controller="layouts--table">
    <div id="adminPanel">
        <div class="chat">
            <div class="chat-messages" ref="messages">
                <chat-message v-for="(m, i) in messages" :msgdecline = "msgDecline" :msgaccept = "msgAccept" :message="m" :user="user" :key="i" :path="path"></chat-message>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.socket.io/socket.io-2.3.0.js"></script>
<script>
    console.log("START1");

    const USER = {!!json_encode($user) !!};
    const CHAT = {!!json_encode($chat) !!};

    let port = 3000;
    let socket = io(`//${location.hostname}:${port}`);
    socket.on('connect', () => console.log('connect'));
    socket.on('connect_error', (err) => console.dir(err));

    Vue.component('chat-message', {
        props: ['message', 'user', 'path','msgaccept','msgdecline'],
        template: `
          <div :id="'msg_' + message.m_id"  class="message" :class="{'accepted' : message.status == 1, 'declined' : message.status == -1 }">
              <div class="message-content z-depth-1" :id="'m_' + message.m_id">
                  <label class="form-label">@{{message.name}}</label>
                  @{{message.text}}
                  <div v-if="message.files">
                    <div v-for="(mf, y) in message.files">
                      <div v-if="(mf.type == 'jpg') || (mf.type == 'gif') || (mf.type == 'png') || (mf.type == 'jpeg') ">
                        <img class="chat-img" v-bind:src="path + '/public/storage/chats/'+ user.room +'/'+ mf.name" />
                      </div>
                      <div v-else>
                      <a download v-bind:href="path + '/public/storage/chats/'+ user.room +'/'+ mf.name" >@{{mf.name}}</a>
                      </div>
                    </div>
                  </div>
                  <div v-else>
                </div>
                <div class="message-time">
                @{{message.time}}
                </div>
              </div>
              <div v-if="message.status == 0" class="actions">
                 <div v-on:click="msgaccept" :data-id="message.m_id" class="btn btn-success">Принять</div>
                 <div v-on:click="msgdecline" :data-id="message.m_id" class="btn btn-danger">Отклонить</div>
              </div>
          </div>
          `
    })

    let startMessages = [];
    console.log(CHAT.messages.length != 0)
    {
        CHAT.messages.forEach(msg => {
            startMessages.push({
                id: msg.user_id,
                m_id: msg.id,
                status: msg.status,
                text: msg.text,
                name: msg.user.name,
                time: msg.created_at,
                files: null
            });
        })

    }

    new Vue({
        el: '#adminPanel',
        data: {
            path: window.location.origin,
            files: null,
            status: 1,
            activeUsers: [],
            findMessage: '',
            foundMessages: [],
            foundMessagesCount: 0,
            foundMessagesIndex: 0,
            foundMessagesLastId: null,
            message: '',
            messages: startMessages,
            users: [],
            user: {
                id: '',
                name: '',
                room: '',
                role: 0,
                socket: ''
            }
        },

        methods: {
            clearFiles() {
                this.files = null;
                document.getElementById('files-text').innerHTML = '';
            },
            msgAccept(e){
                console.log(e.currentTarget.dataset.id);
                let msg_id = e.currentTarget.dataset.id;
                axios({
                    method: 'POST',
                    url: `${window.location.origin}/chat/message/${msg_id}/accept`,
                }).then((response) => {
                    console.log(response)
                    this.sendModeratedMessage(response.data)
                    document.getElementById('msg_' + msg_id).classList.add('accepted')
                });
            },
            msgDecline(e){
                console.log(e.currentTarget.dataset.id);
                let msg_id = e.currentTarget.dataset.id;
                axios({
                    method: 'POST',
                    url: `${window.location.origin}/chat/message/${msg_id}/decline`,
                }).then((response) => {
                    console.log(response)
                    this.sendModeratedMessage(response.data)
                    document.getElementById('msg_' + msg_id).classList.add('declined')
                });
            },

            sendModeratedMessage(msg){

                socket.emit('message-moderate', msg, data => {
                    console.log('startRoom');
                    if (typeof data === 'string') {
                        console.error(data)
                    } else {
                        console.log('moderated')
                    }
                });
            },

            initializeConnection() {
                console.log("InitConnect");
                console.log(this.user);
                socket.on('users-disconnect', users => {
                    console.log(users);
                })

                socket.on('message-new', message => {
                    console.log('message');
                    console.log(message);
                    this.messages.push(message)
                    //console.log( this.messages);
                    scrollToBottom(this.$refs.messages)
                })

                scrollToBottom(this.$refs.messages)
            }
        },

        created() {
            let id = USER.id;
            let name = USER.name;
            let room = CHAT.id;
            let role = 0;

            this.user = {
                id,
                name,
                room,
                role
            }
            console.log("this.user");
            console.log(this.user);

            socket.emit('join', this.user, data => {
                console.log('startRoom');
                if (typeof data === 'string') {
                    console.error(data)
                } else {
                    this.user.socket = data.userSocket;
                    this.initializeConnection();
                }
            });

        },
    })

    function scrollToBottom(node) {
        setTimeout(() => {
            node.scrollTop = node.scrollHeight
        })
    }
</script>
