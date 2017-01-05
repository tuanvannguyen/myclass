<!DOCTYPE html>
<html>
<head>
	<title>Demo PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
	<div id="head">
		<h1>Start Learning PHP....</h1>
	</div>
	<div id="content">
		<?php
			if(isset($_POST['btnResult'])){
				if ($_POST['operation'] == '+') {
					echo 'Kết quả : ' . ($_POST['number1'] + $_POST['number2']);
				} elseif ($_POST['operation'] == '-') {
					echo 'Kết quả : ' . ($_POST['number1'] - $_POST['number2']);
				} elseif ($_POST['operation'] == 'x') {
					echo 'Kết quả : ' . ($_POST['number1'] * $_POST['number2']);
				} elseif ($_POST['operation'] == '/') {
					if($_POST['number2']) {
						echo 'Kết quả : ' . ($_POST['number1'] / $_POST['number2']);
					} else {
						echo "Không chia được cho 0.";
					}
				}
			}
		?>

		<form id="form" action="" method="post">
			<input type="hidden" name="number1" id="number1">
			<input type="hidden" name="number2" id="number2">
			<input type="hidden" name="operation" id="operation">
			<input type="text" id="show"><br>

			<button type="button" id="btnOne" value="1">1</button>
			<button type="button" id="btnTwo" value="2">2</button>
			<button type="button" id="btnThree" value="3">3</button>
			<button type="button" name="btnAdd" value="+">+</button><br>

			<button type="button" id="btnFour" value="4">4</button>
			<button type="button" id="btnFive" value="5">5</button>
			<button type="button" id="btnSix" value="6">6</button>
			<button type="button" name="btnSub" value="-">-</button><br>

			<button type="button" id="btnSeven" value="7">7</button>
			<button type="button" id="btnEight" value="8">8</button>
			<button type="button" id="btnNine" value="9">9</button>
			<button type="button" name="btnTich" value="x">x</button><br>

			<button type="button" id="btnPoint" value=".">.</button>
			<button type="button" id="btnZero" value="0">0</button>
			<button type="button" id="btnAns" value="">Ans</button>
			<button type="button" name="btnThuong" value="/">/</button><br>

			<button type="button" id="btnDel">DEL</button>
			<button type="button" id="btnMu" value="">^</button>
			<button type="button" id="btnLog" value="">log</button>
			<button type="submit" name="btnResult">=</button>
			
		</form>
	</div>
</body>
<script type="text/javascript">
	$(function() {
		$('#form button').click(function() {
			var value1 = $(this).val();
			var current = $('#show').val();
			if (value1 == '+' || value1 == '-' || value1 == 'x' || value1 == '/') {
				if (current != '' && current.indexOf(value1) < 0) {
					if (current.indexOf('+') < 0 
							&& current.indexOf('-') < 0 
							&& current.indexOf('x') < 0
							&& current.indexOf('/') < 0) {
						current += value1;
					}
				}
			}
			else {
				current += value1;
			}
			$('#show').val(current);
			if (current != '' && current.indexOf('+') > 0) {
				 var str = current.split('+');
				$('#number1').val(str[0]);
				$('#number2').val(str[1]);
				$('#operation').val('+');
			} else if(current.indexOf('-') > 0) {
				var str = current.split('-');
				$('#number1').val(str[0]);
				$('#number2').val(str[1]);
				$('#operation').val('-');
			} else if (current.indexOf('x') > 0) {
				var str = current.split('x');
				$('#number1').val(str[0]);
				$('#number2').val(str[1]);
				$('#operation').val('x');
			} else if(current.indexOf('/') >0) {
				var str = current.split('/');
				$('#number1').val(str[0]);
				$('#number2').val(str[1]);
				$('#operation').val('/');
			}
		});
<<<<<<< HEAD
=======
			$('#btnDel').click(function() {
				var val1 = $('#show').val();
				var kq = '';
				for(var i = 0; i < (val1.length -1); i++) {
					kq += val1[i];
				}
			$('#show').val(kq);
		});
>>>>>>> bc1e21779acbc5fa59206218860e1ede5745f5a6
	});
</script>
</html>
