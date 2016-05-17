var chatObject = {};
var socket = io('localhost:3000');
$('.users__list').on('change',function(e) {
    if($(this).val()){
        chatObject.room = $(this).val();
    }
});

$('.chat__form').submit(function(e) {
    e.preventDefault();
    var msg = $('#m').val();
    if( !chatObject.room || msg.length <= 0 ) return;
    socket.emit('chat message', chatObject.room, msg);
    $('#messages').append('<li>'+msg+'</li>');
    $('#m').val('');
    return false;
});

socket.emit('join room', $('.chat__form').data('user'));

socket.on('chat message',function(msg){
    $('#messages').append('<li>'+msg+'</li>');
});


socket.emit('error', $('.chat__form').data('user'));
socket.on('error', function(msg)
{
    $('#messages').append('<li>'+msg+'</li>');
});

