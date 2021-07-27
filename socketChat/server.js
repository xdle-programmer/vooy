var express = require('express');
var http = require('http');
var socket = require('socket.io');

var app = express();
var server = http.createServer(app).listen(3001);

var clients = {};

function start(server)
{
	console.log(server);
	let io = socket.listen(server);
	console.log('SERVER_START');
	/* let io = socket(server, {
		cors: {
			origin: "http://ip.madeinearth.online",
			methods: ["GET", "POST"],
			credentials: false
		  }
	}); */


	io.sockets.on('connection', function (socket)
	{
		let id = '';

		console.log('here');

		if (socket.handshake.query['id'] &&
			clients[socket.handshake.query['id']] == null)
		{
			id = socket.handshake.query['id'];
			console.log('NEW_CLIENT ' + socket.handshake.query['id'] + ' ' + socket.id);

			clients[socket.handshake.query['id']] = {
				'id': socket.id,
				'ip': socket.handshake.address,
			}

			io.emit('test', {'connection': 'connect'});
		}

		/* socket.use((packet, next) => {
			console.log('here_1');
			console.dir(packet[0]);
			console.log('here_2');
		}); */

		socket.on('dispatch_test', function (data)
		{
			console.log('dispatch_test', data);
			io.emit('receiving_test', {'param': 'a'});
		});

		socket.on('sendMessage', function (data)
		{
			console.log(data);
			console.log(clients[data.to]['id']);
			//if (data.to && clients[data.to])
				io.to(clients[data.to]['id']).emit('receivingMessage', data);
		});

		/* NOTICE */
		socket.on('notice', function (data)
		{
			if (data.to && clients[data.to] && data.content)
				io.to(clients[data.to]['id']).emit('notice', data);
		});
		/*  */

		socket.on('test', function (data) {
			console.log('--test--');
		})

		socket.on('disconnect', function (data)
		{
			console.log('DISCONNECT ' + id);

			if (clients[id] != undefined)
				delete clients[id];
		});
	});
}

start(server);
