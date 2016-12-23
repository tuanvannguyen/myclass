function Tinhtoan() {
    $('#btnDel').click(function () {
        $('#show').val('');
    });
    $('#form button').click(function () {
        var value1 = $(this).val();
        var current = $('#show').val();
        if ((value1 == 'x') || (value1 == '-') || (value1 == '+') || (value1 == '/')) {
            if (current != '' && current.indexOf(value1) < 0) {
                if((current.indexOf('+') < 0) && (current.indexOf('-') < 0) && (current.indexOf('x') < 0) && (current.indexOf('/') < 0)  ) {
                    current += value1;
                }
            }
        } else {
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

$(document).ready(function(){
    Tinhtoan();
});