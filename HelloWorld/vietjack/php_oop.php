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
<?php require("student.php"); ?>

<?php
	//print something
	function prSt($str) {
		echo $str."<br>";
	}
	prSt("<h2>This tutorial from Vietjack</h2>");

	$st = new Student("Anhtu", "Hanoi");
	prSt($st->getName());
	prSt($st->getInfo());

	$st2 = new Student("Nguyen bka", "HCM");
	$st2->setName("Toan noob");
	prSt($st2->getInfo());
	prSt($st2->name);
	
	prSt(Student::UNIVERSITY);	// truy cập biến hằng số giống với biến static
	prSt("Tổng số SV đã có: ".Student::$STUDENT_COUNT);
?>
</body>
</html>