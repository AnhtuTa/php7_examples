<html>
<head>
	<style type="text/css">
		h3 {
			color: blue;
		}
	</style>
</head>
<body>
<?php require("_menu.php"); ?>
<?php
	//print something
	function prSt($str) {
		echo $str."<br>";
	}
	prSt("<h2>This tutorial from Vietjack</h2>");

	//Truyền tham số bởi tham chiếu trong PHP
	function addFive($num) {
		$num += 5;
	}
	function addSix(&$num) {	//chú ý có dấu &
		$num += 6;
	}
	$orignum = 10;
	addFive( $orignum );
	echo "Giá trị biến orignum là: $orignum<br />";		//10
	addSix( $orignum );
	echo "Giá trị biến orignum là: $orignum<br />";		//16

	//Thiết lập giá trị mặc định cho tham số hàm trong PHP
	function printMessage($str = "Giá trị mặc định") {
		print $str."<br>";
	}
	printMessage("<div>Today is cool!</div>");
	printMessage();


	///////////// Cookie ////////////////
	echo('<h3>Cookie</h3>');
	setcookie("TestCookie", "This is a test");
	setcookie("name", "Anhtu", time()+3600);		//100s
	prSt("All cookies:");
	print_r($_COOKIE);echo "<br>";

	prSt("All cookies:");
	foreach ($_COOKIE as $key => $value) {
		prSt("<div style='padding-left: 20px;'>$key => $value</div>");
	}
	prSt($_COOKIE["name"]);
	if(!isset($_COOKIE["address"])) {
		prSt("cookie address hasn't been set yet!");
	} else echo $_COOKIE["address"];

	//delete cookie
	//setcookie("name", "", time()- 60);
	if(!isset($_COOKIE["name"])) prSt("Delete cookie name successful!");
	else echo "Can't delete cookie name<br>";

	///////////// Superglobal ////////////////
	echo('<h3>Biến $_SERVER trong PHP</h3>');
	prSt($_SERVER['PHP_SELF']);
	prSt($_SERVER['SERVER_ADDR']);
	prSt($_SERVER['GATEWAY_INTERFACE']);
	prSt($_SERVER['SERVER_SOFTWARE']);
	prSt($_SERVER['SERVER_PROTOCOL']);
	prSt($_SERVER['REQUEST_TIME']);
	prSt($_SERVER['REQUEST_METHOD']);
	prSt($_SERVER['HTTP_ACCEPT']);
	prSt("Còn nhiều lắm!");

	////////////////// Xử lý ngoại lệ và lỗi ///////////////////
	echo('<h3>Xử lý ngoại lệ và lỗi</h3>');
	if(!file_exists("demo2.php")) {
		die("File not found!");
	} else echo "Found file!<br>";

	//error_reporting(E_ERROR);
	//tạo một hàm xử lý lỗi trong PHP
	// function handleError($error_level, $error_message,$error_file,$error_line) {
	// 	echo "<b style='color: red; font-size: 17px;'>Xảy ra lỗi:</b> [$error_level] $error_message - $error_file:$error_line";
	// 	echo "<br />";
	// 	echo "Kết thúc PHP Script";
	// 	die();
	// }
	// //thiết lập error handler
	// set_error_handler("handleError");

	//trigger an error
	//myFunctionxyoefokae();
	// trigger_error("A custom error has been triggered. hehehe :)");
	// echo "try to print something after having an error<br>";
	// $demoNum = 0;
	// if($demoNum == 0) trigger_error("Can't divide by 0!");

	//Xử lý ngoại lệ 
	try {
		throw new Exception("There's an Exception");
	} catch(Exception $e) {
		echo "Bắt ngoại lệ: :".$e->getMessage()." at line ".$e->getLine();
		echo "<br>file: ".$e->getFile();
	}

	//////////////// Date & Time /////////////
	echo('<h3>Date & Time</h3>');
	prst("hàm time() biểu diễn số giây đã trôi qua từ nửa đêm 1/1/1970: ".time());
	foreach (getdate() as $key => $value) {
		prSt($key." = ".$value);
	}

	// in ngày trong tuần
	echo date("l") . "<br>";
	// in ngày trong tuần, ngày trong tháng, tháng, năm, thời gian, AM hoặc PM
	echo date("l jS \of F Y h:i:s A");
	// hiển thị October 3, 1975 là vào Friday
	echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";
	// sử dụng một hằng số trong tham số format
	echo date(DATE_RFC822) . "<br>";
	// hiển thị date time dưới dạng giống như: 1975-10-03T00:00:00+00:00
	echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));
?>
</body>
</html>