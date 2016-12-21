/**
 * Created by Moe-tan on 12/21/2016.
 */
function comment() {
    $('.comment').on('click', function () {
        var name = $.trim($('.name').val());
        var text = $.trim($('.text').val());
        var alpha = $('.name').val().slice(0, 1);

        if (name != '') {
            $('#table').each(function (idx) {
                row = "<tr>";
                // row += '<td rowspan="2" class="item-0 abc-' + alpha + '"><h1>' + alpha + "</h1></td>";
                row += '<td rowspan="2"><img src="image/' + alpha + '.png"></td>';
                row += "<td class='item-1'>" + name + "</td>";
                row += "</tr>";
                row += "<tr>";
                row += "<td class='item-2'>" + text + "</td>";
                row += "</tr>";
            });
            $('#table tbody').append(row);
            // var back = ["#ff4000", "#80ff00", "#00ff00", "#00ffff", "#bf00ff", "#000080", "#0000FF", "#228B22"];
            // var rand = back[Math.floor(Math.random() * back.length)];
            // $('.abc-' + alpha + '').css("background", rand);
        }
    })
}
$(document).ready(function () {
    comment();
});