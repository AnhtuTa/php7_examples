<html>
<head>
	<title>php tutorial Vietjack</title>
</head>
<body>
<?php
	function prSt($str) {	//prSt = print something
		echo($str."<br/>");
		// Hoặc viết như sau cũng đc
		// echo $str."<br/>";
	}
	
	$bien_1 = "name";
	$bien_2 = '$bien_1 sẽ không được in!';
	print($bien_2);
	print "<br>";

	$bien_2 = "$bien_1 sẽ được in!";
	print($bien_2);
	
	if (TRUE)
		print("Dòng văn bản này luôn luôn được in trên trình duyệt.<br>");
	else
		print("Dòng văn bản này sẽ không bao giờ được in trên trình duyệt.<br>");
	/*
	$foo = <<<END
	abcd
	END;
	*/
	
	//constant
	define("VIETJACK", 98);
	echo VIETJACK."<br/>";
	echo constant("VIETJACK")."<br/>"; // Kết quả được in như lệnh echo bên trên
	prSt("__LINE__ = ".__LINE__);		//Chú ý: có 2 dấu _ ở cả đầu và đít!
	prSt("__FILE__ = ".__FILE__);
	prSt("__CLASS__ = ".__CLASS__);
	prSt("__METHOD__ = ".__METHOD__);
	
	//array
	$arr1 = array(1,2,3,4,5);
	foreach($arr1 as $ar) {
		prSt($ar);
	}
	
	$numbers[0] = "one";
	$numbers[1] = "two";
	$numbers[2] = "three";
	$numbers[3] = "four";
	$numbers[4] = "five";
	foreach($numbers as $num) {
		prSt($num);
	}
	
	//Mảng liên hợp trong PHP
	$salaries = array("hoang" => 2000, "manh" => 1000, "huong" => 500);
	$salaries["Anhtu"] = 1200;
	prSt($salaries['hoang']);
	prSt($salaries["manh"]);
	prSt($salaries['huong']);
	prSt($salaries['Anhtu']);
	
	//Mảng đa chiều trong PHP
	$markArray = array(
		"Anhtu" => array("math" => 9, "Physics" => 8.5, "Chemistry" => 5),
		"Nguyen" => array("math" => 5, "Physics" => 5.5, "Chemistry" => 9),
		"Trung" => array("math" => 8, "Physics" => 8, "Chemistry" => 7)
	);
	prSt($markArray["Anhtu"]["math"]);
	prSt($markArray["Nguyen"]["math"]);
	prSt($markArray["Trung"]["Chemistry"]);
	
?>
</body>
</html>