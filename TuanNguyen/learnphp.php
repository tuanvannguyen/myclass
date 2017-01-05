<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP</title>
	<meta charset="utf-8">
	<style type="text/css">
		* {
			margin: 0px;
			padding: 0px;
		}
		body {
			margin-left: 10%;
			font-family: Calibri;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<h2>Starting Learning PHP</h2>
	<?php
		// Variables PHP
		$txt1 = "Hello world";
		$x = 5;
		$y = 9.8;
		$z = 4;
		$t = 6;
		$txt2 = "Learn PHP";
		$cars = array("Volvo","BMW","Toyota");
		echo "I love $txt2 @_@ <br/>";
		echo "I love ".$txt2. " ^_^ <br>";

		function test() {
			global $x, $y;
			$x+=$y;
			$GLOBALS['y'] += $GLOBALS['z'];
		}
		test();
		echo "$x (echo)<br/>";
		print "$y (print)<br/>";
		var_dump($txt1);
		echo "<br/>";
		var_dump($z);
		echo "<br/>";
		var_dump($y);
		echo "<br/>";
		var_dump($cars);
		echo "<br/>";
		// length string
		echo "Độ dài của chuỗi: \"Hello world!\" là : ";
		echo strlen("Hello world!");
		echo "<br/>";
		// number of word
		echo "Số khoảng trắng(số từ khóa) của chuỗi \"Hello world!\" là: ";
		echo str_word_count("Hello world!");
		echo "<br/>";
		// Reverse a String
		echo "Xâu đảo ngược của 'Xin Chao' là: ";
		echo strrev("Xin Chao");
		echo "<br/>";
		//Tìm kiếm trả về vị trí bắt đầu, nếu không có trả về false
		echo "Vị trí của từ word bắt đầu trong chuỗi 'Hello world!' tại vị trí thứ(nếu không có trả về false): ";
		echo strpos("Hello world!", "world");
		echo "<br/>";
		// Thay thế word
		echo "Thay 'Chúc Mừng' vào 'Chào' trong xâu 'Xin Chào Bạn' : ";
		echo str_replace("Chào","Chúc Mừng", "Xin Chào Bạn");
		echo "<br/>";
		// loop white 
		echo "Loop while (có thể không lặp) <br/>";
		while ( $z<= 10) {
			echo "This is number $z <br/>";
			$z++;
		}
		//Loop do...while
		echo "Loop do...while(ít nhất 1 lần lặp) <br/>";
		do {
			echo "This is number $t <br/>";
			$t++;
		} while ( $t<= 9);
		// Loop for
		echo "Loop for <br/>";
		for ($i=1; $i <= 5; $i++) {
			echo "The number is $i <br/>";
		}
		//Loop foreach
		echo "Loop foreach: <br/>";
		$colors = array("red", "green", "blue", "yellow");
		foreach ($colors as $value) {
    		echo "$value <br>";
		}
		// Sắp xếp mảng theo thuwsw tự tăng sort
		$cars = array("Volvo", "BMW", "Toyota");
		$numbers = array(11, 16, 32, 22, 14);
		$age = array("Peter"=>"38", "Ben"=>"35", "Joe"=>"43");
		$clength = count($cars);
		$arrlength = count($numbers);
		echo "Sắp xếp tăng theo Từ khóa(key): ";
		sort($cars);echo "<br/>";
		for($i = 0; $i < $clength; $i++) {
    		echo $cars[$i];
    		echo "<br>";
		}
		echo "Sắp xếp dãy số tăng(11, 16, 32, 22, 14): ";
		sort($numbers);echo "<br/>";
		for($i = 0; $i < $arrlength; $i++) {
    		echo $numbers[$i];
    		echo "<br>";
		}
		echo "Sắp xếp giảm theo Từ khóa(key): ";
		rsort($cars);echo "<br/>";
		for($i = 0; $i < $clength; $i++) {
    		echo $cars[$i];
    		echo "<br>";
		}
		echo "Sắp xếp dãy số giảm(11, 16, 32, 22, 14): ";
		rsort($numbers);echo "<br/>";
		for($i = 0; $i < $arrlength; $i++) {
    		echo $numbers[$i];
    		echo "<br>";
		}
		echo "Sắp xếp tăng theo giá trị(value) ";
		asort($age);echo "<br/>";
		foreach($age as $i => $i_value) {
   		echo "Key=" . $i . ", Value=" . $i_value;
    	echo "<br>";
		}
		echo "Sắp xếp tăng theo Key ";
		ksort($age);echo "<br/>";
		foreach($age as $i => $i_value) {
   		echo "Key=" . $i . ", Value=" . $i_value;
    	echo "<br>";
		}
		echo "Sắp xếp giảm theo giá trị(value) ";
		arsort($age);echo "<br/>";
		foreach($age as $i => $i_value) {
   		echo "Key=" . $i . ", Value=" . $i_value;
    	echo "<br>";
		}
		echo "Sắp xếp giảm theo Key ";
		krsort($age);echo "<br/>";
		foreach($age as $i => $i_value) {
   		echo "Key=" . $i . ", Value=" . $i_value;
    	echo "<br>";
		}
		$file = fopen("learnphp.php", "r") or
		exit("Unable to open file!");
		//đọc qua từng dòng cho tới khi kết thúc.
		while(!feof($file)){
  			echo fgets($file). "<br />";
  		}
		fclose($file);
	?>
	<form action="" method="post”  enctype="multipart/form-data">
	Please choose a file:
		<input type="file" name=“imagefile" id="file" /><br />
		<input type="submit" name="submit" value="Submit" />
	</form>
	<?php
		//Thư mục chứa file upload
		$target = "../images/";

		//Kiểm tra xem có file nào được submit không?
		if($_FILES["uploaded"]["name"]){
			//$filename = trim(addslashes($_FILES['userfile']['name']));
			$target = $target . basename($_FILES['uploaded']['name']) ; 
			$uploaded_type=$_FILES["uploaded"]["type"];
			$uploaded_size=$_FILES["uploaded"]["size"];
			$ok=1;
			//Kiểm tra kích thước file upload 
			if ($uploaded_size > 3500000) 	{ 
				echo "Kích thước tập tin upload vượt quá 3,5MB.<br>"; 
				$ok=0; 
			} 
			
			//Kiểm tra dạng tập tin upload (file type)
			if (!($uploaded_type=="image/gif" || $uploaded_type=="image/pjpeg" || $uploaded_type=="image/jpeg" ||$uploaded_type =="text/php")) { 
				echo "Chỉ upload tập tin dạng GIF, JPG, JEPG, PHP .<br>"; 
				$ok=0; 
			}
			
			//Kiểm tra biến giá trị biến $ok (bằng 0 là có lỗi)
			//Ngược lại nếu không có lỗi, tiến hành upload tập tin
			if ($ok==0)	{ 
				//echo "Sorry your file was not uploaded";
				echo "Xin lỗi tập tin của bạn đã không được Upload"; 
			} 	
			else
			{ 
				if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 		{ 
					echo "Tập tin ". basename( $_FILES['uploaded']['name']). " đã được upload xong."; 
				} 
				else { 
					if ($_FILES['uploaded']['error'] > 0)	{
						switch ($_FILES['uploaded']['error'])
						{
						case 1:					
							echo 'File quá dung lượng cho phép';
							break;
						case 2:
							echo 'File quá dung lượng cho phép';
							break;
						case 3:
							echo 'File upload chưa xong';
							break;
						case 4:
							echo 'Không file nào được upload';
							break;
						}
						exit;
					} 
				} 
			} 
		}
	?>

</body>
</html>
