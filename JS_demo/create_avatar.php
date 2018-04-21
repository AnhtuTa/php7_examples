<?php
	// Nhận dữ liệu canvas
	$avt = $_POST['dataAvt'];
	echo "avt = $avt"."<br>";

	// Tìm kiếm và thay thế đường dẫn ảnh
	$avt = str_replace('data:image/png;base64,', '', $avt); 
	$avt = str_replace(' ', '+', $avt);

	$fileData = base64_decode($avt);// Giải mã file dạng Base64
	//bên create_avatar_by_name.html send file sang đây, nó đã bị mã hóa dạng base64 ($avt)
	//do đó $avt là dạng string có thể đọc được.
	//bây giờ giải mã thành data ảnh (binary) ban đầu, đó là $fileData
	//echo "fileData = $fileData"."<br>";	//dạng nhị phân, ko đọc được

	// Tạo tên ảnh ngẫu nhiên để không bị trùng lặp 
	$charName = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$randName = substr(str_shuffle($charName), 0, 15);

	// Đường dẫn thư mục ảnh
	$fileName = 'avatars/' . $randName . '.png';

	// Đặt dữ liệu canvas vào file ảnh
	file_put_contents($fileName, $fileData);

	echo "<div style='color: blue;'>File đã được lưu vào thư mục trên server<br></div>";
?>