var express = require('express');
var http = require('http');
var socketIO = require('socket.io');
var users = require('./users')()
const rooms = require('./rooms')()

let test = 111;

var app = express();
var httpServer = http.createServer().listen(3000);
let message = (name, text, id, files, time, m_id, image) => ({
  name,
  text,
  id,
  files,
  time,
  m_id,
  image
});

console.log('start');

function init(server) {

  let io = socketIO.listen(server);

  io.sockets.on('connection', socket => {
    let ip = socket.handshake.address;
    console.log('--------ip------');
    console.log(ip);
    console.log('---ip---');

    console.log('connected\n\n');

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
        console.log("room: " + data.room + " - Role: " + data.role + " ID:" + data.id);


        /*
        if (data.socket){
            let curUser = users.getBySocket(data.socket)
            console.log("SOCKET LEAVE")
            console.log(curUser);
            socket.leave(curUser.room);
            users.remove(data.socket)
        }*/

        users.remove(data.id);
        socket.join(data.room);

        let status = 0;
        if (data.role == 0) {
          console.log('users.add');
          //rooms.add(data.room, 0, data.id)
          users.add(data.id, data.name, data.room, 0, socket.id)
          io.emit('user-connect', users.getByRoom(data.room));
        } else {
          console.log('users.add2');
          status = 1;
          //rooms.addModer(data.room, data.id);
          //rooms.changeStatus(data.room, 1)
          users.add(data.id, data.name, data.room, 1, socket.id)
        }


        io.to(data.room).emit('users-update', users.getByRoom(data.room))

        //socket.emit('message-new', message('Система', 'Welcome ' + data.name));
        //socket.broadcast.to(data.room).emit('message-new', message('Система', `${data.name} joined`));

        console.log("ALL USERS");
        console.log(users.getAll());
        console.log('---join---');


        callback({
          userId: data.id,
          roomId: data.room,
          roomStatus: status,
          userSocket: socket.id
        })
      }
    })

    socket.on('message-create', (data, callback) => {
        console.log("____________________________IO");
        console.log(io.sockets.adapter.rooms);
        console.log("____________________________IO--");

      if (!data) {
        return callback('Message cant be empty',false);
      } else {
          console.log('')
          console.log('')
        console.log('------message-new------');
        console.log(data);
        console.log('------users-----');
        console.log(users.getAll());
        const user = users.getBySocket(data.userSocket)
          //console.log('send to room: ' + user.room)
        if (data.files) {
          console.log('data.files');
          io.to(user.room).emit('message-new', message(data.message.name, data.message.text, Number(data.message.id), data.files, data.message.time, data.message.m_id, data.message.image));
        }
        else {
          console.log('NO data.files');
          io.to(user.room).emit('message-new', message(data.message.name, data.message.text, Number(data.message.id), null, data.message.time, data.message.m_id, data.message.image));
        }
          console.log('SEND TO: '+ user.room)
        console.log('------message-new------');
      }
    })

    socket.on('message-file-add', (data, callback) => {
      if (!data) {
        return callback('Message cant be empty',false);
      } else {
        console.log('------message-file-add------');
        console.log(data.chat_id);
        console.log(data.files);
        console.log('---message-file-add---');

        io.to(data.chat_id).emit('message-file-new', [data.files]);
        //callback();
      }
    })

    socket.on('message-test', function (message) {
      console.log('--------message-test------');
      console.log(message);
      console.log('---message-test---');
    });

    socket.on('disconnect', () =>{
        console.log('');
        console.log('');
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

      socket.on('exit', () =>{
          console.log('');
          console.log('');
          console.log('-----EXIT----');
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
}

init(httpServer);
