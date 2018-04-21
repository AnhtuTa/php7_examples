<?php
	$json_str = '{ "name":"John", "age":30, "city":"New York" }';
	if(isset($_GET['callback'])) {
		$func = $_GET['callback'];
		echo "$func($json_str)";
	} else {
		echo "$json_str";
	}

?>