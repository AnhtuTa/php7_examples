<html>
	<head>
		<title>thuc hanh php buoi 2</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h4>Form variable</h4>
		<?php
			if(!empty($_GET["province"])) {
				echo $_GET["province"]."<br>";
			} else echo "Chua chon province<br>";

			if(!empty($_GET["industry"])) {
				echo $_GET["industry"]."<br>";
			} else echo "Chua chon industry<br>";
		?>
		<a href="javascript:window.history.back(-1);">Quay lại trang trước</a>
	</body>
</html>

