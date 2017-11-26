<html>
	<head>
		<style type="text/css">
			h1 {
				color: #00ff00
			}
			h2 {
				color: #dda0dde
			}
			p {color: rgb(0,0,255)}
			span.highlight{
				background-color:yellow;
				font-weight:bold 
			}
		</style>
		<title>thuc hanh php</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h4>Variable</h4>
		<?php
			//bai 1
			$sotrang=10;
			$record=5;
			$check = true;
			$strSQL="select * from tblCustomers";
			echo "$strSQL" . "<br>";
			echo '$strSQL' . '<br>';
			$myarrs= array("first", "last", "company");
			$myarrs[0] = "Number 0";
			$myarrs[1] = "Number 1";
			$myarrs["name"] = "Anhtu";
			echo $myarrs[1];
			echo "<br>";
			echo $myarrs[2];
			echo "<br>";
			echo $myarrs["name"];
			echo "<br>";

			//bai 2
			$a = 100;
			/* global scope */
			function Test() {
				global $a;
				$i = 10;
				$a += 10;
				echo "<br>a:= $a";
				echo "<br>i:= $i";
				/* reference to local scope variable */
			}
			Test();
			echo "<br>a:= $a";
			$i=1000;
			echo "<br>i:= $i";

			//bai 3
			define("pi", 3.1416);
			function test2() {
				if(defined("pi")) echo "<br>pi:=" . pi;
				else echo "<br>pi not defined";
				if(defined("MY_NAME")) echo "<br>MY_NAME:=" . MY_NAME;
				else echo "<br>MY_NAME not defined";
			}
			test2();
			echo "<br>";

			//bai 7
			$j=date("w");
			$str="";
			switch($j) {
				case 0:
					$str="Today is Sunday";
					break;
				case 1:
					$str="Today is Monday";
					break;
				case 2:
					$str="Today is Tueday";
					break;
				case 3:
					$str="Today is Wednesday";
					break;
				case 4:
					$str="Today is Thursday";
					break;
				case 5:
					$str="Today is Friday";
					break;
				case 6:
					$str="Today is Saturday";
					break;
				default:
					$str="Today is Sunday";
					break;
			}
			echo "<b>".$str."</b><br/>";
		?>
	</body>

</html>

