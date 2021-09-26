@extends('layouts.app')

@section('h_script')
    <style>
        .chat__message--banned {
            background: #ffd7e1 !important;
        }

        .chat__messages {
            max-height: 600px;
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>
@stop

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/">Главная</a><a
                        class="breadcrumbs__item" href="/tenders">Список тендеров</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Тендер {{$tender->id}}</div>
                </div>
            </div>
        </section>
        <section class="section section--small">
            <div class="layout">
                <div class="tender-header">
                    <div class="tender-header__main">
                        <div class="tender-header__main-title">
                            <div class="tender-header__main-title-name">Тендер на товары</div>
                            <div class="tender-header__main-title-number">№{{$tender->id}}</div>
                            <div class="tender-header__main-title-status">
                                <div
                                    class="tender-header__main-title-status-title tender-header__main-title-status-title--green">
                                    {{$tender->status->name}}
                                    @if ($tender->substatus != null)
                                        ({{$tender->substatus->name}})
                                    @endif
                                </div>
                                <div class="tender-header__main-title-status-line">
                                    <div class="status-line status-line--{{$tender->status_id}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="tender-header__desc">
                        <div class="tender-header__desc-item">
                            <div class="tender-header__desc-item-name">Cоздан:</div>
                            <div class="tender-header__desc-item-value">24.02.2020</div>
                        </div>
                        <div class="tender-header__desc-item">
                            <div class="tender-header__desc-item-name">В реализации с:</div>
                            <div class="tender-header__desc-item-value">28.02.2020</div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </section>

        <section class="section section--small">
            <div class="layout">
                <div class="tender-header__main-buttons">
                    @php
                        $hasReview = App\Models\TenderProductReview::where('provider_id', $user->id)->where('tender_id', $tender->id)->first();
                    @endphp
                    @if($hasReview != null)
                        <div class="tender-header__desc-item-name">Предложение сделано:</div>
                        <div
                            class="tender-header__desc-item-value"> {{$hasReview->created_at->format('d.m.Y')}}</div>
                    @endif
                </div>

                @if ($tender->substatus != null)
                    @if (($tender->deliveryman_id == null && $tender->negotiator_id == $user->id) || ($tender->deliveryman_id == $user->id))
                        @if ($tender->substatus->id == 2)
                            <form method="POST" action="{{ route('tender-substatus-next') }}">
                                @csrf
                                <input type="hidden" name="substatus_id" value="{{$tender->substatus->id}}">
                                <input type="hidden" name="tender_id" value="{{$tender->id}}">
                                <x-button class="modal__button button button--invert form-check__button">Счёт
                                    выставлен
                                </x-button>
                            </form>
                        @endif
                        @if ($tender->substatus->id == 3)
                            <form method="POST" action="{{ route('tender-substatus-next') }}">
                                @csrf
                                <input type="hidden" name="substatus_id" value="{{$tender->substatus->id}}">
                                <input type="hidden" name="tender_id" value="{{$tender->id}}">
                                <x-button class="modal__button button button--invert form-check__button">Счёт
                                    оплачен
                                </x-button>
                            </form>
                        @endif
                    @endif
                @endif

                <div class="buyer">
                    <div class="buyer__logo" data-name="П"></div>
                    <div class="buyer__title">{{$tender->buyer->name}}</div>
                    <div class="buyer__options">
                        <div class="buyer__option">
                            <div class="buyer__option-name">Город:</div>
                            <div class="buyer__option-value">{{$tender->buyer->city}}</div>
                        </div>
                        <div class="buyer__option">
                            <div class="buyer__option-name">Тендеров:</div>
                            <div class="buyer__option-value">1</div>
                        </div>
                    </div>
                </div>
                <div class="tabs">
                    <div class="tabs__header">
                        <div class="tabs__toggle-nav">
                            <div class="tabs__toggle-nav-button tabs__toggle-nav-button--prev">
                                <svg class="tabs__toggle-nav-button-icon">
                                    <use xlink:href="../images/icons/icons-sprite.svg#arrow"></use>
                                </svg>
                            </div>
                            <div class="tabs__toggle-nav-button tabs__toggle-nav-button--next">
                                <svg class="tabs__toggle-nav-button-icon">
                                    <use xlink:href="../images/icons/icons-sprite.svg#arrow"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="tabs__toggle-buttons">
                            <div class="tabs__toggle-button">Тендер</div>
                            <div class="tabs__toggle-button tabs__toggle-button--active">Мой ответ</div>
                        </div>
                    </div>
                    <div class="tabs__toggle-items">
                        <div class="tabs__toggle-item">
                            <section class="section section--small">
                                <div class="tender-row tender-row--product tender-row--header">
                                    <div class="tender-row__item">Фото</div>
                                    <div class="tender-row__item">Наименование</div>
                                    <div class="tender-row__item">Количество</div>
                                    <div class="tender-row__item">Необходим образец</div>
                                    <div class="tender-row__item">Брэндинг</div>
                                    <div class="tender-row__item">Упаковка</div>
                                    <div class="tender-row__item">Сертификаты</div>
                                    <div class="tender-row__item tender-row__item--center">
                                        Комментарий
                                    </div>
                                </div>
                                @if ($tender->products)
                                    @foreach ($tender->products as $key => $product)
                                        <div id="tender-table-product-{{$product->id}}"
                                             class="tender-row tender-row--product">

                                            @if ($product->attachments->first())
                                                @php
                                                    $path = "";
                                                    $photoCount = 0;
                                                @endphp
                                                @foreach ($product->attachments as $key => $attachment)
                                                    @php
                                                        $path .= '../storage/tenderProducts/'.$attachment->path;
                                                        $photoCount++;
                                                        if(!$loop->last)
                                                          $path .= ','
                                                    @endphp
                                                @endforeach
                                                <div class="tender-row__item"
                                                     data-product-img-slider="{{$path}}">
                                                    <div
                                                        class="tender-row__preview tender-row__preview--zoom">
                                                        <div
                                                            class="tender-row__preview-zoom-text">{{$photoCount}}
                                                            фото
                                                        </div>
                                                        <img class="tender-row__preview-img"
                                                             src="../storage/tenderProducts/{{$product->attachments->first()->path}}">
                                                    </div>
                                                </div>
                                            @else
                                                <div class="tender-row__item"
                                                     data-product-img-slider="../storage/tenderProducts/empty.jpg">
                                                    <div
                                                        class="tender-row__preview tender-row__preview--zoom">
                                                        <div
                                                            class="tender-row__preview-zoom-text">
                                                            0 фото
                                                        </div>
                                                        <img class="tender-row__preview-img"
                                                             src="../storage/tenderProducts/empty.jpg">
                                                    </div>
                                                </div>
                                            @endif

                                            <div
                                                class="tender-row__item tender-row__item--middle">{{$product->title}}</div>
                                            <div
                                                class="tender-row__item tender-row__item--big">{{$product->count}}</div>
                                            <div class="tender-row__item">
                                                @if ($product->sample)
                                                    <svg
                                                        class="tender-row__item-icon tender-row__item-icon--check">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                    </svg>
                                                @else
                                                    <svg
                                                        class="tender-row__item-icon tender-row__item-icon--not-check">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                    </svg>
                                                @endif
                                            </div>
                                            <div class="tender-row__item">
                                                @if ($product->branding)
                                                    <svg
                                                        class="tender-row__item-icon tender-row__item-icon--check">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                    </svg>
                                                @else
                                                    <svg
                                                        class="tender-row__item-icon tender-row__item-icon--not-check">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                    </svg>
                                                @endif
                                            </div>
                                            <div class="tender-row__item">
                                                @if ($product->packing)
                                                    <svg
                                                        class="tender-row__item-icon tender-row__item-icon--check">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                    </svg>
                                                @else
                                                    <svg
                                                        class="tender-row__item-icon tender-row__item-icon--not-check">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                    </svg>
                                                @endif
                                            </div>
                                            <div
                                                class="tender-row__item tender-row__item--left">
                                                @foreach($product->sertificats as $sertificat)
                                                    @if($loop->last)
                                                        {{$sertificat->name}}
                                                    @else
                                                        {{$sertificat->name}},
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div
                                                class="tender-row__item tender-row__item--left">{{$product->description}}</div>
                                        </div>
                                    @endforeach
                                @else
                                    <h1>Пусто</h1>
                                @endif
                            </section>
                        </div>
                        <div class="tabs__toggle-item tabs__toggle-item--active tabs__toggle-item--active-effect">
                            <div class="border-block offer">
                                <div class="tender-row tender-row--offer tender-row--header">
                                    <div class="tender-row__item">Фото</div>
                                    <div class="tender-row__item">Наименование</div>
                                    <div class="tender-row__item">Количество</div>
                                    <div class="tender-row__item">Стоимость</div>
                                    <div class="tender-row__item">Срок реализации</div>
                                    <div class="tender-row__item">Предоставим образец</div>
                                    <div class="tender-row__item">Брэндинг</div>
                                    <div class="tender-row__item">Упаковка</div>
                                    <div class="tender-row__item tender-row__item--center">Комментарий</div>
                                </div>
                                @if($review != null)
                                    @if($review->items != null)
                                        @foreach($review->items as $itemKey => $item)
                                            <div class="tender-row tender-row--offer">
                                                @if ($item->attachments->first())
                                                    @php
                                                        $path = "";
                                                        $photoCount = 0;
                                                    @endphp
                                                    @foreach ($item->attachments as $key => $attachment)
                                                        @php
                                                            $path .= '../storage/reviewProducts/'.$attachment->path;
                                                            $photoCount++;
                                                            if(!$loop->last)
                                                              $path .= ','
                                                        @endphp
                                                    @endforeach
                                                    <div class="tender-row__item"
                                                         data-product-img-slider="{{$path}}">
                                                        <div
                                                            class="tender-row__preview tender-row__preview--zoom">
                                                            <div
                                                                class="tender-row__preview-zoom-text">{{$photoCount}}
                                                                фото
                                                            </div>
                                                            <img class="tender-row__preview-img"
                                                                 src="../storage/reviewProducts/{{$item->attachments->first()->path}}">
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="tender-row__item"
                                                         data-product-img-slider="../storage/tenderProducts/empty.jpg">
                                                        <div
                                                            class="tender-row__preview tender-row__preview--zoom">
                                                            <div class="tender-row__preview-zoom-text">0 фото
                                                            </div>
                                                            <img class="tender-row__preview-img"
                                                                 src="../storage/tenderProducts/empty.jpg">
                                                        </div>
                                                    </div>
                                                @endif

                                                <div
                                                    class="tender-row__item tender-row__item--middle">{{$item->name}}
                                                </div>
                                                <div
                                                    class="tender-row__item tender-row__item--big">{{$item->count}}</div>
                                                <div
                                                    @php
                                                        $price = $item->price . " RUB";
                                                        if ($item->currency_id != null) {
                                                             if ($item->currency_id != 1){
                                                                 $currency = App\Models\Currency::find($item->currency_id);
                                                                 $formatedPrice = $currency->price_back * $item->price;
                                                                 $price = round($formatedPrice, 2) .' RUB'. ' ('. $item->price .' '.$currency->code.')';
                                                             }

                                                            }
                                                    @endphp
                                                    class="tender-row__item tender-row__item--big">
                                                    {{$price}}
                                                </div>
                                                <div
                                                    class="tender-row__item tender-row__item--big">{{$item->release_time}}</div>
                                                <div class="tender-row__item">
                                                    @if ($item->sample)
                                                        <svg
                                                            class="tender-row__item-icon tender-row__item-icon--check">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                        </svg>
                                                    @else
                                                        <svg
                                                            class="tender-row__item-icon tender-row__item-icon--not-check">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                        </svg>
                                                    @endif
                                                </div>

                                                <div class="tender-row__item">
                                                    @if ($item->branding)
                                                        <svg
                                                            class="tender-row__item-icon tender-row__item-icon--check">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                        </svg>
                                                    @else
                                                        <svg
                                                            class="tender-row__item-icon tender-row__item-icon--not-check">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                        </svg>
                                                    @endif
                                                </div>

                                                <div class="tender-row__item">
                                                    @if ($item->packing)
                                                        <svg
                                                            class="tender-row__item-icon tender-row__item-icon--check">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                        </svg>
                                                    @else
                                                        <svg
                                                            class="tender-row__item-icon tender-row__item-icon--not-check">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                        </svg>
                                                    @endif
                                                </div>
                                                <div
                                                    class="tender-row__item tender-row__item--left">{{$item->description}}
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif
                            </div>
                            <div class="border-block">
                                <div id="chat"
                                     @if($review != null)
                                         data-type="review"
                                        @if($review->chats->first() != null)
                                        data-chatid="{{$review->chats->first()->id}}"
                                        @endif
                                     @elseif ($chat != null)
                                        data-type="chat"
                                        data-chatid="{{$chat->id}}"
                                     @endif
                                     class="chat">
                                    <div class="chat__title"></div>
                                    <div class="chat__messages">
                                    </div>
                                    <div class="chat__form">
                                        <div class="chat__form-wrapper">
                                            <textarea class="chat__form-wrapper-input"
                                                      placeholder="Введите сообщение"></textarea>
                                        </div>
                                        <div class="chat__form-file-preview chat__form-file-preview--empty">
                                            <div class="chat__message-content-images"></div>
                                            <div class="chat__message-content-files"></div>
                                        </div>
                                        <div class="chat__form-buttons">
                                            <label class="chat__form-file-input-label">
                                                <div class="chat__form-file-input-text">Прикрепить файл</div>
                                                <svg class="chat__form-file-input-icon">
                                                    <use xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                </svg>
                                                <input class="chat__form-file-input" type="file" multiple>
                                            </label>
                                            <div class="chat__form-send button button--small">Отправить сообщение</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('f_script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.socket.io/socket.io-2.3.0.js"></script>

    <script>
        console.log("CHAT")
        let USER = {!! json_encode($user) !!};
        console.log(USER);

        if (USER != null) {
            let port = 3000;
            let socket = io(`//${location.hostname}:${port}`);
            socket.on('connect', () => console.log('connect'));
            socket.on('connect_error', (err) => console.dir(err));

            starChat(socket);
        }

        function starChat(socket) {
            let Chat = {
                element: null,
                user: null,
                users: null,
                chats: USER.chats,
                message: '',
                messages: [],
                isNewChat: true,
                files: [],
                storageFiles: [],

                chatContentNode: null,
                chatMessages: null,
                chatMessage: null,
                chatFiles: null,
                chatFilesContent: null,
                chatImagesContent: null,
                chatButton: null,

                sendMessage: function () {
                    if (this.chatMessage == null)
                        return;

                    this.message = this.chatMessage.value;
                    //this.message = "Тестовое сообщение";
                    console.log(this.chatMessage)
                    console.log(this.chatMessage.value)

                    let formData = new FormData();

                    for (let i = 0; i < this.chatFiles.files.length; ++i) {
                        formData.append("attachments[" + i + "][file]", this.chatFiles.files[i]);
                    }

                    formData.append("user_id", this.user.id);
                    formData.append("text", this.message);
                    formData.append("chat_id", this.user.room);
                    ///AJAX ADDMESSAGE///
                    axios({
                        method: 'POST',
                        url: `${window.location.origin}/chat/${this.user.room}/message`,
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        },
                    }).then((response) => {
                        console.log(response.data);
                        let file = null;
                        let files = [];
                        if (response.data.file) {
                            response.data.file.forEach(f => {
                                file = {
                                    messageId: f.msg_id,
                                    name: f.name,
                                    type: f.type,
                                }
                                files.push(file)
                            })
                        }

                        let message = {
                            id: this.user.id,
                            text: this.message,
                            name: this.user.name,
                            time: response.data.message.created_at,
                            m_id: response.data.message.id,
                            image: this.user.image
                        }
                        console.log(files)
                        if (files.length == 0)
                            var data = {message: message, userSocket: this.user.socket}
                        else
                            var data = {message: message, userSocket: this.user.socket, files: files}

                        socket.emit('message-create', data, data => {
                            console.log(data);
                        });

                        message.status = 0;
                        message.files = files;
                        this.putMessage(message);

                        this.files = null;
                        this.message = '';
                        this.chatFiles.files = null;
                        this.chatMessage.value = '';

                        this.chatFilesContent.innerHTML = '';
                        this.chatImagesContent.innerHTML = '';
                    })

                },
                openChat: async function (room) {
                    this.initializeConnection();

                    this.user.room = room;
                    this.chatMessages = this.chatContentNode.querySelector('.chat__messages')
                    this.chatMessage = this.chatContentNode.querySelector('.chat__form-wrapper-input')
                    this.chatFiles = this.chatContentNode.querySelector('.chat__form-file-input')
                    this.chatFilesContent = this.chatContentNode.querySelector('.chat__message-content-files')
                    this.chatImagesContent = this.chatContentNode.querySelector('.chat__message-content-images')
                    console.log(this.chatMessages)
                    this.chatMessages.innerHTML = ''

                    socket.emit('join', this.user, data => {
                        console.log('startRoom');
                        if (typeof data === 'string') {
                            console.error(data)
                        } else {
                            this.user.socket = data.userSocket;
                            console.log(this.user);
                            this.getMessages();
                        }
                    });
                },
                initializeConnection: function () {
                    console.log("InitConnect");
                    console.log(this.user);

                    socket.on('users-disconnect', users => {
                        console.log(users);
                    })

                    socket.on('message-moderated', data => {
                        console.log('MODERATED')
                        console.log(data);
                        if (data.status == -1 && this.user.id != data.id)
                            return;
                        if (this.user.id == data.id)
                            this.putMessage(data, 1);
                        else
                            this.putMessage(data, 0);

                    })

                    socket.on('message-new', message => {
                        this.messages.push(message)
                        console.log("ALL MSG");
                        console.log(this.messages);
                        //scrollToBottom(this.$refs.messages)

                        if (message.files) {
                            console.log("HAS FILE");
                            this.storageFiles.push(message.files);
                        }
                    })
                },
                getMessages: function () {
                    axios({
                        method: 'GET',
                        url: `${window.location.origin}/chat/${this.user.room}/messages/?status=1&mod=1`,
                    }).then((response) => {
                        console.log(response.data);
                        this.messages = [];

                        response.data.forEach(message => {
                            this.messages.push({
                                files: message.attachments,
                                id: message.user_id,
                                image: 'none',
                                m_id: message.id,
                                name: 'user',
                                text: message.text,
                                status: message.status,
                                time: message.created_at,
                                decline_text: message.decline_text,
                            });
                        })

                        this.messages.forEach(msg => {
                            this.putMessage(msg);
                        });
                        console.log("Messages")
                        console.log(this.messages)
                    });
                },
                putMessage(msg, is_new = 0) {
                    console.log("PUT MSG")
                    console.log(msg);

                    let subClasses = ''
                    let declineText = '';
                    if (msg.status == -1) {
                        subClasses = 'chat__message--banned';
                        if (msg.decline_text != null) {
                            declineText = 'Причина отклонения: ' + msg.decline_text + '</br>';
                        }
                    }
                    else if(msg.status == 1){
                        subClasses = 'chat__message--accepted';
                    }

                    if (is_new == 1) {
                        let curMsg = document.getElementById('msg-' + msg.m_id)

                        if (subClasses != '')
                            curMsg.classList.add(subClasses);

                        if (msg.status == -1) {
                            curMsg.querySelector('.chat__message-content-text').innerHTML = `
                                        ${declineText}
                                        ${msg.text}
                        `
                        }
                        return;
                    }


                    let chat__message = document.createElement("div")
                    chat__message.classList.add('chat__message')

                    if (this.user.id == msg.id)
                        chat__message.classList.add('chat__message--invert')
                    let files = ''
                    if (msg.files != null) {
                        let images = '';
                        let docs = '';
                        msg.files.forEach(f => {
                            if (f.type == 'jpg' || f.type == 'jpeg' || f.type == 'gif' || f.type == 'png') {
                                images += `<img
                                class="chat__message-content-image"
                                src="${window.location.origin}/storage/chatRoom/${this.user.room}/${f.name}">`
                            } else {
                                docs +=
                                    `
                                    <a class="chat__message-content-file" href="${window.location.origin}/storage/chatRoom/${this.user.room}/${f.name}">
                                        <svg class="chat__message-content-file-icon">
                                            <use
                                                xlink:href="${window.location.origin}/storage/chatRoom/${this.user.room}/${f.name}"></use>
                                        </svg>
                                        <div class="chat__message-content-file-text">${f.name}</div>
                                    </a>
                                    `;
                            }
                            files = `
                             <div
                                class="chat__message-content-images">
                                ${images}
                             </div>
                             <div class="chat__message-content-files">
                                ${docs}
                             </div>`;
                        })
                    }

                    chat__message.innerHTML = `
                                <div id="msg-${msg.m_id}" class="chat__message-content ${subClasses}">
                                    <div class="chat__message-content-text">
                                        ${declineText}
                                        ${msg.text}
                                    </div>
                                ${files}
                                </div>
                                <div class="chat__message-time">
                                     ${formateDate(msg.time)}
                                </div>
                            `;
                    this.chatMessages.appendChild(chat__message)
                },
                init: function () {
                    console.log("chat Created");
                    this.user = {
                        id: USER.id,
                        name: USER.name,
                        room: 0,
                        role: 0,
                        image: 'none'
                    }

                    this.chatContentNode = document.getElementById('chat')
                    this.openChat(this.chatContentNode.dataset.chatid);

                    document.querySelectorAll('.chat__form-send').forEach(btn => {
                        btn.addEventListener('click', (e) => {
                            console.log(e.currentTarget);
                            this.sendMessage();
                        });
                    });

                }
            }
            Chat.init();
        }

        function formateDate(date) {
            if (date == null)
                return 0;
            return date.split('T')[1].split('.')[0]
        }
    </script>


@stop
