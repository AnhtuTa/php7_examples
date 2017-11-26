<html>
	<head>
		<title>thuc hanh php buoi 2</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			function pr($str) {	//pr = print something
				echo($str."<br/>\n");
			}
			
			$link = mysqli_connect('localhost:3307', 'root', '');
			if(!$link) die("Can't connect to MySQL!");
			else pr("Connect success!");

			mysqli_select_db("cakephp", $link);
			$totalRow = 0;
			$sql = "select * from users";
			$result = mysqli_query($sql, $link);
		?>
	</body>
</html>

