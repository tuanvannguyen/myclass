<!DOCTYPE html>
<html>
<head>
	<title>Giải Phương Trình Bậc 2 một ẩn</title>
	<meta charset="utf-8">
	<style type="text/css">
		* {
			padding: 0px;
			margin: 0px;
		}
		#container {
			width: 80%;
			margin: auto;
			height: 200px;
			font-size: 20px;
		}
		#container #form {
			width: 35%;
			height: 180px;
			border: 1px solid #cdcdcd;
		}
		#container #form input{
			height: 20px;
			width: 100px;
			margin-left: 10px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div id="container">
		<h2>Giải phương trình bậc 2 một ẩn</h2><br><br>
		<?php
		if (isset($_POST['btnClick'])){
			$a = ($_POST['numberA']);
			$b = ($_POST['numberB']);
			$c = ($_POST['numberC']);
			if ($a == 0 && $b == 0 && $c == 0) {
				echo "Phương trình có vô số nghiệm";
			}
			elseif ($a == 0 && $b == 0) {
				echo "Phương trình vô nghiệm <br/>";
			}
			elseif ($a == 0) {
				echo "Phương trình có nghiệm duy nhất x = ".-$c/$b."<br/>";
			}
			else {
				$Del = $b*$b - 4*$a*$c;
				if ($Del < 0) {
					echo "Phương trình vô nghiệm <br/>";
				}
				elseif ($Del == 0) {
					echo "Phương trình có nghiệm kép x = ".(-$b/(2*$a))."<br/>";
				}
				else {
					echo "Phương trình có hai nghiệm phân biệt: x1 = ".(-$b + sqrt($Del))/(2*$a).", x2 = ".(-$b - sqrt($Del))/(2*$a)."<br/>";
				}
			}
		}
	?>
		<form id="form" action="" method="POST">
			Mời bạn nhập các hệ số của phương trình:
			<br>
			a = <input type="text" name="numberA"><br>
			b = <input type="text" name="numberB"><br>
			c = <input type="text" name="numberC"><br>
			<input type="submit" name="btnClick" value="Submit">
		</form>
	</div>
</body>
</html>
