<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="avatar" />
		<input type="submit" name="upload" value = "UpLoad">
	</form>
	<?php
		if(isset($_POST['upload'])) {
			var_dump($_FILES);
			if(isset($_FILE['avatar'])) {
				if($_FILE['avatar']['error']>0) {
					echo 'File lỗi...';
				} else {
					move_uploaded_file($_FILE['avatar']['tmp_name'], './hinhanh/' .$_FILE['avatar']['name']);
					echo 'File Uploaded.';
				}
				echo "string";
			}
			else echo '<br>Bạn chưa chọn file...';
		}
	?>
</body>
</html>