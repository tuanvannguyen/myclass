<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/controller.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="content">
    <form id="form" action="" method="post">
        <input type="hidden" name="number1" id="number1">
        <input type="hidden" name="number2" id="number2">
        <input type="hidden" name="operation" id="operation">
        <input type="text" id="show" value="<?php
        //$result = '';
        //$so1 = isset($_POST['so1']) ? $_POST['so1'] : '';
        //$so2 = isset($_POST['so2']) ? $_POST['so2'] : '';
        //if (isset($_POST['cong'])) {
        //    $result = $so1 + $so2;
        //}
        //if (isset($_POST['tru'])) {
        //    $result = $so1 - $so2;
        //}
        //if (isset($_POST['nhan'])) {
        //    $result = $so1 * $so2;
        //}
        //if (isset($_POST['chia'])) {
        //    $result = $so1 / $so2;
        //}
        if (isset($_POST['btnResult'])) {
            if ($_POST['operation'] == '+') {
                echo($_POST['number1'] + $_POST['number2']);
            }
            if ($_POST['operation'] == '-') {
                echo($_POST['number1'] - $_POST['number2']);
            }
            if ($_POST['operation'] == 'x') {
                echo($_POST['number1'] * $_POST['number2']);
            }
            if ($_POST['operation'] == '/') {
                echo($_POST['number1'] / $_POST['number2']);
            }
        }
        ?>">
        <br>
        <button type="button" id="btnDel">DEL</button>
        <button type="button" name="btnThuong" value="/">/</button>
        <br>

        <button type="button" id="btnSeven" value="7">7</button>
        <button type="button" id="btnEight" value="8">8</button>
        <button type="button" id="btnNine" value="9">9</button>
        <button type="button" name="btnTich" value="x">x</button>
        <br>

        <button type="button" id="btnFour" value="4">4</button>
        <button type="button" id="btnFive" value="5">5</button>
        <button type="button" id="btnSix" value="6">6</button>
        <button type="button" name="btnSub" value="-">-</button>
        <br>

        <button type="button" id="btnOne" value="1">1</button>
        <button type="button" id="btnTwo" value="2">2</button>
        <button type="button" id="btnThree" value="3">3</button>
        <button type="button" name="btnAdd" value="+">+</button>
        <br>

        <button type="button" id="btnZero" value="0">0</button>
        <button type="button" id="btnPoint" value=".">.</button>
        <button type="submit" name="btnResult">=</button>
        <br>
    </form>
</div>
</body>
</html>