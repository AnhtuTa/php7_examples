<html>
	<head>
		<title>thuc hanh php buoi 2</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h4>Form variable</h4>
		<?php
			$name = $_POST["fullname"];
			if(empty($name)) echo "Mày chưa nhập tên à?<br>";
			else echo $name."<br>";
			
			if(!isset($_POST["gender"])) echo "Mày chưa chọn giới tính nhé!<br>";
			else echo $_POST["gender"]."<br>";
		?>
	</body>
</html>

