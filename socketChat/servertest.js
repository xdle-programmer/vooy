var express = require('express');
var app = express();
var server = require('http').Server(app);
var io = require('socket.io').listen(server,  {transports: ['websocket', 'flashsocket', 'htmlfile', 'xhr-polling', 'polling'],});

var users = require('./users')()
const rooms = require('./rooms')()

let message = (name, text, id, files, time, m_id, image) => ({
  name,
  text,
  id,
  files,
  time,
  m_id,
  image
});

server.listen(8892, function(){
    console.log("listening on *:8892");
});

io.on('connection', socket =>
{
    let ip = socket.handshake.address;
    console.log('--------ip------');
    console.log(ip);
    console.log('---ip---');
    console.log('connected\n\n');

//JOIN ///////////////////////////////////////////////////
    socket.on('join', (data, callback) => {
      console.log('--------join------');
      console.log(data);
      if (!data.name || !data.room || !data.id) {
        console.log('join fail');
        console.log(data.name);
        console.log(data.room);
        console.log(data.id);
        callback("Enter valid data");
      } else {
        console.log(ip + " :: " + data.name + " - join Chat");
        console.log("room: " + data.room + " ID:" + data.id);


        users.remove(data.id);
        socket.join(data.room);

        console.log('users.add');
        users.add(data.id, data.name, data.room, 0, socket.id)

        io.emit('user-connect', users.getByRoom(data.room));

        io.to(data.room).emit('users-update', users.getByRoom(data.room))

/*
        console.log("ALL USERS");
        console.log(users.getAll());
        console.log('---join---');
*/

        callback({
          userId: data.id,
          roomId: data.room,
          userSocket: socket.id
        })
      }
    })
//JOIN ///////////////////////////////////////////////////

//MESSAGE ///////////////////////////////////////////////////
    socket.on('message-create', (data, callback) => {
      if (!data) {
        return callback('Message cant be empty',false);
      } else {
        console.log('------message-new------');
        console.log(data);
        console.log('-----------');

        console.log('------users-----');
        console.log(users.getAll());
        console.log('-----------');

        const user = users.getBySocket(data.userSocket)
        if (data.files) {
          console.log('data.files');
          io.to(user.room).emit('message-new', message(data.message.name, data.message.text, Number(data.message.id), data.files, data.message.time, data.message.m_id, data.message.image));
        }
        else {
          console.log('NO data.files');
          io.to(user.room).emit('message-new', message(data.message.name, data.message.text, Number(data.message.id), null, data.message.time, data.message.m_id, data.message.image));
        }

        console.log('------message-new------');
      }
    })
//MESSAGE ///////////////////////////////////////////////////


socket.on('disconnect', () =>{
  console.log('-----disconnect----');
  console.log(socket.id);
  console.log('↑ socket.id---');
  console.log('↓ user---');
  const user = users.remove(socket.id)
  console.log(user);
  console.log('--disconnect--');
  if (user){
    //io.to(user.room).emit('message-new',  message('Система', `${user.name} left`));
    //io.to(user.room).emit('users-disconnect', users.getByRoom(user.room))
  }
})

});
