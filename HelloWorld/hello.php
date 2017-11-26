<html>
<head>
	<title>first demo php</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: AnhTu
 * Date: 21/11/2017
 * Time: 23:18
 */
	function prSt($str) {	//prSt = print something
		echo($str."<br/>");
		// Hoặc viết như sau cũng đc
		// echo $str."<br/>";
	}
	
	echo("Hello World!<br/>");
	define("PI", 3.1416);
	$r = 10;
	echo("r = ".$r."<br/>");
	$s = PI*pow($r, 2);
	
	$don_gia = 5000;
	$so_luong = 100;
	$thanh_tien = (double)($so_luong*$don_gia);
	echo("thanh_tien = ".$thanh_tien."<br/>");
	
	$var = "100" + 15;
	$var = "100" + 15.0;
	$var = 39 . " Steps";
	echo("var = ".$var."<br/>");
	//$a = 10; $b = 0; $c = $a / $b;
	
	$n = "Đây la chuỗi";
	$a = 123;
	$b = 123.456;
	$mang = array(1,2,3);
	prSt(gettype($n));	// → string
	prSt(gettype($a));	// → integer
	prSt(gettype($b));	// → double
	prSt(gettype($mang));	// → array

	if($thanh_tien > 1000) {
		echo("Sao mày mua gì mà lắm thế!<br/>");
	} else echo("Mua như vậy là đủ rồi!");
	prSt("Anhtu");
	prSt("DTVT is shit");
	prSt("F*ck DTVT");
	
	$dayOfWeek = "Sunday";
	switch($dayOfWeek) {
		case "Sunday":
			prSt("Today is Sunday, so I can do anything without studying");
			break;
		case "Monday":
			prSt("Today is the beginning of week! I hate this!");
			break;
		default:
			prSt("What is today?");
			break;
	}
	
	for($i = 1; $i < 5; $i++) {
		prSt("i = ".$i);
	}
	
	$t = 5;
	while($t > 0) {
		if($t % 2 == 0) {
			$t--;
			continue;
		}
		prSt("t = ".$t);
		$t--;
	}
	
	echo abs(-4.2); 	// → 4.2 (kiểu float/double)
	echo abs(-5);	 // → 5 (kiểu integer)
	echo abs(4); 	//→ 4 (kiểu integer)
	prSt("<br/>".pi());
	echo pi()."<br/>";
	
	echo rand(10, 200)."<br/>";
	
	$text = "\t\tXin chao các bạn :) ...    ";
	echo ltrim($text)."<br/>";
	echo rtrim($text)."<br/>";
	echo chop($text, "\t.")."<br/>";
	echo trim($text)."<br/>";
	
	echo strtoupper("chuyển đổi chữ thành chữ HOA (<b>php can't display Unicode??? How to fix this?</b>)")."<br/>";
	echo strtolower("CHUYỂN CHỮ HOA THÀNH CHỮ THƯỜNG")."<br/>";
	echo ucfirst("viết hoa ký tự đầu tiên của chuỗi")."<br/>";
	echo ucwords("viết hoa ký tự đầu tiên của mỗi từ")."<br/>";
	
	echo strlen($text)."<br/>";
	
	$str = "Hello World!";
	print_r(count_chars($str,1));
?>
</body>
</html>

