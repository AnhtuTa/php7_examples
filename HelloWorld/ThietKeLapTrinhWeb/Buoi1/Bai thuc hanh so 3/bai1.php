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
			echo "<b><br>Chú ý: hàm isset(): Kiểm tra tồn tại: dùng để kiểm tra biến có giá trị hay không";
			echo "<br>hàm empty(): Kiểm tra giá trị rỗng: dùng để kiểm tra biến có giá trị rỗng hay không</b>";
			$var = 0;
			if (empty($var))
			{ //valuates true. Var’s value = 0
				echo "<br>1. biến var có giá trị rỗng hoặc = 0, hoặc FALSE hoặc chưa có giá trị";
			}
			if (!isset($var)) { // evaluates false. isset($var) is true, !isset($var) is false.
				echo "<br>2. biến var chưa có giá trị";
			} else echo "<br>2. biến var đã có giá trị, và giá trị đó là $var";
			$var ="";
			if (empty($var))
			{ //evaluates true. Length of var’s value is 0.
				echo "<br>3.Var is either 0 or not at all set";
			}
			$var ="123";
			if (empty($var))
			{ //evaluates false
				echo "<br>4. Var is either 0 or not at all set";
			}
			unset($var);
			if (isset($var)==false) // !isset($var)
				echo "<br>5. Var is not set or unset().";
			else echo "<br>5. Var’value is $var";
			echo "<br>";

			//bai 2
			$a = 13; $b = 82; $c = -197;
			//Tạo chuỗi phương trình để in
			$pt = "<b>" . $a ."x<sup>2 </sup>+ ". $b. "x + " .$c. " = 0
			</b>";
			//Không giải nếu phương trình là phương trình bậc nhất.
			if ($a==0) echo "Đây là phương trình bậc nhất!";
			else {
				$delta = $b * $b - 4*$a*$c;
				if ($delta < 0) printf ("Phương trình %s vô nghiệm!",
				$pt);
				elseif ($delta == 0)
				printf("Phương trình %s có một nghiệm kép x= %.2f", $pt, (-
				$b/(2*$a)));
				else
				{
				$x1 = (-$b + sqrt($delta))/(2*$a);
				$x2 = (-$b - sqrt($delta))/(2*$a);
				printf("Phương trình %s có 2 nghiệm phân biệt:",
				$pt);
				printf("x1= %.2f và x2= %.2f", $x1, $x2);
				}
			}
			echo "<br>";

			//bai 3

		?>
	</body>

</html>

