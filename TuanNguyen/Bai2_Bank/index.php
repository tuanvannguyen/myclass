<?php
	//Reading Data
$editRow = null;
$arrAccount = array();
$arrAccount = json_decode(file_get_contents('data/accountbank.json'), true);

	//Writting Data
if(isset($_POST['btnCreat'])) {
	if($_POST['age'] > 15 && $_POST['money'] > 5000000) {
		$arrAccount[] = $_POST;
		file_put_contents('data/accountbank.json', json_encode($arrAccount));
	}
}
		//Sorting Data
if(count($arrAccount) > 1) {
	for($i = 0; $i < count($arrAccount) - 1; $i++) {
		for($j = $i+1; $j < count($arrAccount); $j++) {
			if($arrAccount[$i]['money'] < $arrAccount[$j]['money']) {
				$tmp = $arrAccount[$i];
				$arrAccount[$i] = $arrAccount[$j];
				$arrAccount[$j] = $tmp;
			}
		}
	}
}
	// Udate Data 
if(isset($_POST['btnUpdate']) && isset($_GET['index'])) {
	if($_POST['age'] > 15 && $_POST['money'] > 5000000) {
		$idx = $_GET['index'];
		$arrAccount[$idx] = $_POST;
		file_put_contents('data/accountbank.json', json_encode($arrAccount));
	}
	if(count($arrAccount) > 1) {
		for($i = 0; $i < count($arrAccount) - 1; $i++) {
			for($j = $i+1; $j < count($arrAccount); $j++) {
				if($arrAccount[$i]['money'] < $arrAccount[$j]['money']) {
					$tmp = $arrAccount[$i];
					$arrAccount[$i] = $arrAccount[$j];
					$arrAccount[$j] = $tmp;
				}
			}
		}
	}
	file_put_contents('data/accountbank.json', json_encode($arrAccount));
}
	// Edit and Delete
if(isset($_GET['action']) && isset($_GET['index'])) {
	$idx = $_GET['index'];
		// Editing 
	if($_GET['action'] == 'edit') {
		$editRow = $arrAccount[$idx];
	}
		//Deleting
	if ($_GET['action'] == 'delete') {
		unset($arrAccount[$idx]);
		$rs = array();
		foreach ($arrAccount as $item) {
			$rs[] = $item;
		}
		file_put_contents('data/accountbank.json', json_encode($rs));
		header('Location: http://localhost/tuannguyen/myclass/TuanNguyen/Bai2_bank');
		exit();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Banker</title>
	<meta charset="utf-8">
	<style type="text/css">
		.hide {
			display: none;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
	<div id="container">
		<?php if($editRow == null) { ?>
		<h2>Add New Account</h2>
		<?php } else { ?>
		<h2>Update Account</h2>
		<?php } ?>
		<button type="button" id="btnAdd">Add Account</button>
		<div id="formAdd" class="hide">
			<form id="form" action="index.php<?php echo isset($_GET['index']) ? '?index=' . $_GET['index'] : ''; ?>" method= "post">
				<label>Mã:</label>&nbsp
				<input type="text" name="id" value="<?php if(isset($editRow['id'])) { echo $editRow['id'];} ?>"><br>
				<label>Tên:</label>&nbsp
				<input type="text" name="name" value="<?php if(isset($editRow['name'])) { echo $editRow['name'];} ?>"><br>
				<label>Tuổi:</label>&nbsp
				<input type="text" name="age" value="<?php if(isset($editRow['age'])) { echo $editRow['age'];} ?>"><br>
				<label>Số tài khoản:</label>&nbsp
				<input type="text" name="account" value="<?php if(isset($editRow['account'])) { echo $editRow['account'];} ?>"><br>
				<label>Số Tiền:</label>&nbsp
				<input type="text" name="money" value="<?php if(isset($editRow['money'])) { echo $editRow['money'];} ?>"><br>

				<?php if($editRow == null) { ?>
				<input type="submit" name="btnCreat" value="Add Account">
				<button type="button" id="btnReset">Cancel</button>
				<?php } else { ?>
				<input type="submit" name="btnUpdate" value="Save">
				<button type="button" id="btnCancle">Cancel</button>
				<?php } ?>
			</form>
			<br>
		</div>
		<table border="1" id="myTable">
			<thead>
				<tr>
					<th>No.</th>
					<th>ID</th>
					<th>Name</th>
					<th>Age</th>
					<th>Account</th>
					<th>Money</th>
					<th>Function</th>
				</tr>
			</thead>
			<tbody>
				<?php if(isset($arrAccount)) : ?>
					<?php foreach ($arrAccount as $key => $item) { ?>
					<tr>
						<td><?= ($key + 1) ?></td>
						<td><?= $item['id'] ?></td>
						<td><?= $item['name'] ?></td>
						<td><?= $item['age'] ?></td>
						<td><?= $item['account'] ?></td>
						<td><?= number_format($item['money']) ?></td>
						<td>
							<a href="index.php?action=edit&index=<?=$key?>" id="btnEdit">Edit | </a>
							<a href="index.php?action=delete&index=<?=$key?>" onclick = "return confirm('Are you sue ?')">Delete</a>
						</td>
					</tr>
					<?php } ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</body>
<script type="text/javascript">
	$(function() {
		$('#btnCancle').click(function() {
			$('#formAdd').addClass('hide');
		});
		$('#btnAdd').click(function() {
			$('#formAdd').removeClass('hide');
		});
		$('#btnEdit').click(function() {
			$('#formAdd').removeClass('hide');
		});
		$('#btnReset').click(function() {
			$('#formAdd').addClass('hide');
		});
	});
</script>
</html>
