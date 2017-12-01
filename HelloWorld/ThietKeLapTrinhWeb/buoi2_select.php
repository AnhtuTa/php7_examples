<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>:: Quan ly sinh vien::</title>
</head>
<?php require("DatabaseUtils.php"); ?>
<body>
	<h3>Hien thi tat ca sinh vien</h3>
	<?php
		function prSt($str) {
			echo $str."\n";
		}

		$db = new DatabaseUtils();
		$db->connect();
		$resultSet = $db->selectAllStudents();
		if(mysqli_num_rows($resultSet) > 0) {
			//hien thi SV
			prSt("<table style='border-collapse: collapse;' border='1'>");
			prSt("<tr>");
				prSt("<th>id</th>");
				prSt("<th>name</th>");
			prSt("</tr>");
			// Sử dụng vòng lặp để duyệt kết quả truy vấn
			while($row = mysqli_fetch_array($resultSet)) {
				prSt("<tr>");
					prSt("<td>".$row['id']."</td>");
					prSt("<td>".$row['name']."</td>");
				prSt("</tr>");	
			}
			prSt("</table>");
		}
		$db->closeConn();
	?>
</body>