$(document).ready(function() {

    var canvas = document.getElementById('testCanvas');
    var context = canvas.getContext('2d');

    function writeMessage(canvas, message) {
        var context = canvas.getContext('2d');
        context.clearRect(0, 0, canvas.width, canvas.height);
        context.font = '18pt Calibri';
        context.fillStyle = 'black';
        context.fillText(message, 10, 25);
    }

    function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
            x: Math.round((evt.clientX-rect.left)/(rect.right-rect.left)*canvas.width),
            y: Math.round((evt.clientY-rect.top)/(rect.bottom-rect.top)*canvas.height)
        };
    }

    canvas.addEventListener('mousemove', function(evt) {
        var mousePos = getMousePos(canvas, evt);
        var message = 'Mouse position: ' + mousePos.x + ',' + mousePos.y;
        writeMessage(canvas, message);
    }, false);





});
