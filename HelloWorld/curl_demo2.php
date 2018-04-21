<?php
	//Hàm sau đéo chạy! Copy từ freetus.net
	function curl_download($url, $saveTo) {
		// Mở một file mới với đường dẫn và tên file là tham số $saveTo
    	$file = fopen($saveTo, 'x');

		// Tạo mới một CURL
		$ch = curl_init();

		// Thiết lập giả lập trình duyệt
    	// nghĩa là giả mạo đang gửi từ trình duyệt nào đó, ở đây là Firefox
    	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");

    	// Thiết lập trả kết quả về chứ không print ra
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);

		// Thời gian timeout
		curl_setopt($ch, CURLOPT_TIMEOUT, 1000);

		// Lưu kết quả vào file vừa mở
		//curl_setopt($ch, CURLOPT_FILE, $file);

		// Thực hiện download file
		$result = curl_exec($ch);

		// Ngắt CURL, giải phóng
		curl_close($ch);
		fwrite($file, $result);
    	fclose($file);
	}
	
	function grab_image($url,$saveto){
	    $ch = curl_init ($url);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
	    $raw = curl_exec($ch);
	    curl_close ($ch);

	    if(file_exists($saveto)){
	        unlink($saveto);
	    }

	    $fp = fopen($saveto,'x');
	    fwrite($fp, $raw);
	    fclose($fp);
	}

	grab_image('https://pre00.deviantart.net/1fbd/th/pre/i/2016/310/0/e/goku_ssj_blue__3_by_saodvd-danj4c2.png', 'upload/demo_download_by_curl.png');	//thư mục upload phải cùng thư mục với file này

?>