<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>:: Quan ly sinh vien::</title>
</head>
<?php require("DatabaseUtils.php"); ?>
<body>
	<h3>Them sinh vien</h3>
	<?php
		$id = $_POST['txtID'];
		$name = $_POST['txtName'];

		$db = new DatabaseUtils();
		$db->connect();
		$kq = $db->insertStudent($id, $name);
		if($kq == true) {
			echo "Insert success!<br>";
		} else
			echo "Insert failed!";

		$db->closeConn();
	?>
</body>