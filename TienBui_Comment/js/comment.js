function choose_background(avatar) {
    var line = [["a", "b", "c", "d", "e", "f"],["g", "h", "i", "j", "k", "l"],
    ["m", "n", "o", "p", "q", "r"],["s", "t", "u", "v", "w", "x"],
    ["y", "z", "1", "2", "3", "4"],["5", "6", "7", "8", "9", "0"]];
    var x2 = 50;
    for (var i = 0; i < line.length; i++) {
        var x1 = 50;
        for(var j = 0; j < line[i].length; j++)
        {
            if(avatar == line[i][j]) {
                console.log(line[i][j]);
                $('.' + avatar + '').css("background-position","-" + x1 + "px -" + x2 + "px");
            }
            x1 += 90;
        }
        x2 += 90;
    }
}

$(document).ready(function () {
    //Init add comment event
    $('#btnComment').click(function () {
        var name = $.trim($('#txtName').val().toLowerCase());
        var content = $('#txtComment').val();
        var avatar = name.charAt(0);
        $('#list').append('<div class="item">' +
            '   <div class="avatar ' + avatar + '"></div>' +
            '   <div class="content">' +
            '       <p>' + $('#txtName').val() + '</p>' +
            '       <p>' + content + '</p>' +
            '   </div>' +
            '</div>');
        choose_background(avatar);
        //reset field
        $('#txtName').val('');
        $('#txtComment').val('');
    });
});
