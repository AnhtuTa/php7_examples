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
	class Student {
		var $name;
		var $address;
		const UNIVERSITY = "HUST";	//hằng số thì ko có dấu $
		static $STUDENT_COUNT = 0;	//biến static vẫn phải có dấu $
		
		function Student($name, $addr) {
			$this->name = $name;
			$this->address = $addr;
			Student::$STUDENT_COUNT++;	//cách truy cập biến static
		}

		function getName() {
			return $this->name;
		}
		function getAddress() {
			return $this->name;
		}
		function setName($ten) {
			$this->name = $ten;
		}
		function setAddress($dia_chi) {
			$this->address = $dia_chi;
		}

		function getInfo() {
			return $this->name." - ".$this->address;
		}
	}
?>
</body>
</html>