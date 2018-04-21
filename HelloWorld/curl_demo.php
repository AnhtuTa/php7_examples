<html>
<head>
	<title></title>
	<meta charset="utf-8" />
</head>
<body>

</body>
</html>
<?php
	// Tạo mới một CURL
	$ch = curl_init();

	// Cấu hình cho CURL
	curl_setopt($ch, CURLOPT_URL, "https://www.google.com.vn/search?q=tai+sao");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	// Thực thi CURL
	$result = curl_exec($ch);

	// Ngắt CURL, giải phóng
	curl_close($ch);

	// in kq
	echo $result;
?>