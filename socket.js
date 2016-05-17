var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

//var redis = require('socket.io-redis');
//var adapter = redis('192.168.10.10');
var redis = require('redis');


io.on('connection', function(socket)
{
    //var redisClient = redis.createClient();

    socket.on('join room',function(name)
    {
        socket.join(name);
        console.log(name);
    });

    socket.on('chat message',function(name, msg)
    {
        socket.broadcast.to(name).emit('chat message', msg);
    });
});

http.listen(3000, function(){
    console.log('listening on *:3000');
});
