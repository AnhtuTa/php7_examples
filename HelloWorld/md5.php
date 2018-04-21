<html>
	<head>
		<title>
			This is MD5
		</title>
	</head>
	<body>
		<div color = "green">
			NHAP MA MD5:
		</div>
		<form action = "" method="post">
			<input type="text" name="plain" id = "1" />
			<input type="submit" name="ok" value = "OK" id ="2" />
		</form>
		<?php
	
			if(isset($_POST['ok'])) {
				$plain = $_POST['plain'];
				echo "Ma MD5:"."<br />";
				echo '<script>
					document.getElementById("1").value = "'.$plain.'";	
				</script>';
				$pass = md5($plain);
				echo "<div>".$pass."</div>";
			}
		?>
	</body>
</html>