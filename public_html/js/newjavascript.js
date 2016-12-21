
$(document).ready(function () {

    $('#btn_header').click(function () {
        var inputname = $('#input_header').val();
        var content = $('#comment_header').val();
        var first = $('#input_header').val().slice(0, 1);
        var row = '';
        row += '<div class="comment">';
        row += '<div class="left val-' + first + '">' + first + '</div>';
        row += '<div class="right">';
        row += '<div class="name">' + inputname + '</div>' + '<div class="content">' + content + '</div>';
        row += '</div>';
        $('#footer').append(row);
        var colors = ["#CCCCCC", "#333333", "#990099","#00ff00","#ff0040","#ff8080"];
        var rand = Math.floor(Math.random() * colors.length);
        $('.val-' + first + '').css('background-color', colors[rand]);
    });
});
