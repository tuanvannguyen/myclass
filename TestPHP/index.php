<!DOCTYPE html>
<html>
<head>
    <title>Demo PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/newcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/newjs.js" type="text/javascript"></script>
</head>
<body>
<div id="head">
<!--    --><?php
//    if(isset($_POST['btnResult'])){
//        if ($_POST['operation'] == 'nhan') {
//            echo 'Ket qua nhan: ' . ($_POST['number1'] * $_POST['number2']);
//        } else if ($_POST['operation'] == 'cong') {
//            echo 'Ket qua cong: ' . ($_POST['number1'] + $_POST['number2']);
//        } else if ($_POST['operation'] == 'tru') {
//            echo 'Ket qua tru: ' . ($_POST['number1'] - $_POST['number2']);
//        } else if ($_POST['operation'] == 'chia') {
//            echo 'Ket qua chia: ' . ($_POST['number1'] / $_POST['number2']);
//        }
//    }
//    ?>
</div>
<div id="content">
    <form id="form" action="" method="post">
        <input type="hidden" name="number1" id="number1" style="margin-left: 20px"><br>
        <input type="hidden" name="number2" id="number2" style="margin-left: 30px"><br>
        <input type="hidden" name="operation" id="operation" style="margin-left: 30px"><br>
        <input type="text" id="show" value="<?php
        if(isset($_POST['btnResult'])){
            if ($_POST['operation'] == 'nhan') {
                echo '' . ($_POST['number1'] * $_POST['number2']);
            } else if ($_POST['operation'] == 'cong') {
                echo '' . ($_POST['number1'] + $_POST['number2']);
            } else if ($_POST['operation'] == 'tru') {
                echo '' . ($_POST['number1'] - $_POST['number2']);
            } else if ($_POST['operation'] == 'chia') {
                echo '' . ($_POST['number1'] / $_POST['number2']);
            }
        }
        ?>" style="margin-left: 15px"><br>

        <button type="button" id="btnOne" value="1">1</button>
        <button type="button" id="btnTwo" value="2">2</button>
        <button type="button" id="btnThree" value="3">3</button>
        <button type="button" name="btnAdd" class="btnAdd" value="+">+</button><br>
        <button type="button" id="btnFour" value="4">4</button>
        <button type="button" id="btnFive" value="5">5</button>
        <button type="button" id="btnSix" value="6">6</button>
        <button type="button" name="btnSub" id="btnSub" value="-">-</button><br>
        <button type="button" id="btnSeven" value="7">7</button>
        <button type="button" id="btnEight" value="8">8</button>
        <button type="button" id="btnNine" value="9">9</button>


        <button type="button" name="btnTich" id="btnTime" value="x">x</button><br>
        <button type="button" id="btnZero" value="0">0</button>
        <button type="button" id="btnPoint" value=".">.</button>
        <button type="button" id="btnDel">DEL</button>
        <button type="button" name="btnThuong" id="btnDiv" value="/">/</button>
        <button type="submit" name="btnResult">=</button>

        <button type="button" name="btnBack" id="btnBack"><-</button>


    </form>
</div>
</body>
<script type="text/javascript">

</script>
</html>
