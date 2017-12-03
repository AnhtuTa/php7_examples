<?php
	$json_str = '{
	    "username" : "thehalfheart",
	    "email" : "thehalfehart@gmail.com",
	    "website" : "freetuts.net",
	    "title" : "Học lập trình với JSON",
	    "food": ["grape", "guava", "watermelon"],
	    "students":
		    [
		    	{
		    		"name": "Anhtu",
		    		"faculty": "SET"
		    	},
		    	{
		    		"name": "Nguyen Bka",
		    		"faculty": "IT"
		    	}
		    ]
	}';

	// convert it to Array/Object (stdClass)
	// $json = json_decode($json_str);
	// But working with stdClass is more complicated than PHP-Array, then try this
	$json = (array) json_decode($json_str);	//nghĩa là nên ép kiểu về kiểu array cho dễ thao tác
	// Hoặc có thể dùng: $json = json_decode($json_str, true);	//kq tương tự

	foreach ($json as $key => $value) {
		if($key == 'food') {
			echo "$key: ";
			// Mỗi $value là 1 giá trị, chứ ko phải 1 JSON hay 1 mảng
			foreach ($value as $data) {
				echo "$data ";
			}
			echo "<br>";
		} else if($key == 'students') {
			foreach ($value as $data) {
				//Mỗi $data lại là 1 JSON
				foreach ($data as $key1 => $value1) {
					echo "<div style='margin-left: 10px;'>$key1: $value1</div>";
				}
			}
		} else echo "$key: $value<br>";
	}

	echo $json['title']."<br>";
	print_r($json['title']."<br>");
	print_r($json);

	echo "<h2>============</h2>";
	$std1 = $json['students'][0];
	foreach ($std1 as $key => $value) {
		echo "$key: $value<br>";
	}
?>