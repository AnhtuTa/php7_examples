<?php
	///////////// Session ////////////////
	session_start();	///Bạn không cần gọi hàm start_session() để bắt đầu một session khi một người dùng truy cập site của bạn, nếu bạn thiết lập biến session.auto_start thành 1 trong php.ini file.
	function prSt($str) {
		echo $str."<br>";
	}
	
	//print all session's property
	foreach ($_SESSION as $key => $value) {
		prSt("$key => $value");
	}
	if(!isset($_COOKIE["PHPSESSID"])) prSt("Chưa có session nào cả! Hãy dùng hàm session_start();");
	else {
		prSt("Đã có 1 session trên doman này, đó là: ");
		prSt("PHPSESSID = ".$_COOKIE["PHPSESSID"]);
	}

	if(isset($_SESSION["counter"])) $_SESSION["counter"] += 1;
	else $_SESSION["counter"] = 1;	//khởi tạo biến counter đếm số lần truy cập trang web
	prSt("<h3 style='color: blue'>Bạn đã truy cập trang này ".$_SESSION["counter"]." lần trong session này!</h3>");

	prSt("Hằng số SID được định nghĩa khi session bắt đầu = ".session_id());
	prSt("session_name = ".session_name());
	prSt(htmlspecialchars(SID));
	//destroy session
	//session_destroy();
?>
<a href="another_page.php?<?php echo htmlspecialchars(session_id()); ?>">click here</a>
<!-- htmlspecialchars() có thể được sử dụng khi in SID để tránh các tấn công liên quan đến XSS. -->