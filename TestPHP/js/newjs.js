function Tinhtoan() {

    $('#form button').click(function () {
        var value1 = $(this).val();
        var current = $('#show').val();
        // Nếu 1 trong 4 nút x - + / được ấn
        if ((value1 == 'x') || (value1 == '-') || (value1 == '+') || (value1 == '/')) {
            // Nếu ô input không rỗng và 4 nút trên chưa xuất hiện
            if (current != '' && current.indexOf(value1) < 0) {
                // Nếu cả 4 nút đều chưa xuất hiện
                if ((current.indexOf('+') < 0) && (current.indexOf('-') < 0) && (current.indexOf('x') < 0) && (current.indexOf('/') < 0)) {
                    // Thì ô input sẽ được thêm 1 trong 4 nút
                    current += value1;
                }
            }
        } // Nếu không phải 4 nút trên thì ô input sẽ nhận số đó
        else {
            current += value1;
        }

        $('#show').val(current);

        if (current != '' && current.indexOf('x') > 0) {
            var str = current.split('x');
            $('#number1').val(str[0]);
            $('#number2').val(str[1]);
            $('#operation').val('nhan');
        } else if (current != '' && current.indexOf('+') > 0) {
            var str = current.split('+');
            $('#number1').val(str[0]);
            $('#number2').val(str[1]);
            $('#operation').val('cong');
        } else if (current != '' && current.indexOf('-') > 0) {
            var str = current.split('-');
            $('#number1').val(str[0]);
            $('#number2').val(str[1]);
            $('#operation').val('tru');
        } else if (current != '' && current.indexOf('/') > 0) {
            var str = current.split('/');
            $('#number1').val(str[0]);
            $('#number2').val(str[1]);
            $('#operation').val('chia');
        }
    });
}

$(document).ready(function () {
    Tinhtoan();
    $('#btnDel').click(function () {
        $('#show').val('');
    });
    $('#btnBack').click(function(){
        var last = ($('#show').val()).slice(0,-1);
        $('#show').val(last);
    });
});