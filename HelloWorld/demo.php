<?php
	function pr($str) {
		echo $str."<br>\n";
	}
	$str = "Hồ Chí Minh được đặt   tên theo tên của bác Hồ";
	$n = str_word_count($str);	//Tại sao lại = 15, trong khi kq là 11 từ?
	
	$arr = countFrequency_singleWord($str);
	foreach ($arr as $key => $value) {
		pr($key.": ".$value);
	}

	echo "<br><br>";
	$arr2 = countFrequency_compoundWord($str);
	foreach ($arr2 as $key => $value) {
		pr($key.": ".$value);
	}

	echo "<br><br>";
	$str2 = "Vietnam la 1 quoc gia rat dep. Con nguoi o day ra hieu khach. Hay den voi Vietnam.";
	$arr3 = removeVietnamAndCountFreq($str2);
	foreach ($arr3 as $key => $value) {
		if($key == '') continue;
		pr($key.": ".$value);
	}

	function countFrequency_singleWord($str) {
		$countFreq = array();
		$array_token = explode(' ', $str);	//chuyển $str thành 1 mảng, trong đó mỗi phần tử của mảng là 1 từ trong $str
		for ($i=0; $i < count($array_token); $i++) {
			if(!isset($countFreq[$array_token[$i]])) $countFreq[$array_token[$i]] = 1;
			else $countFreq[$array_token[$i]]++;
		}

		return $countFreq;
	}

	function countFrequency_compoundWord($str) {
		$countFreq = array();
		$array_token = explode(' ', $str);	//chuyển $str thành 1 mảng, trong đó mỗi phần tử của mảng là 1 từ trong $str
		for ($i=0; $i < count($array_token) - 1; $i++) {
			$temp = $array_token[$i]." ".$array_token[$i+1];
			if(!isset($countFreq[$temp])) $countFreq[$temp] = 1;
			else $countFreq[$temp]++;
		}

		return $countFreq;
	}

	function removeVietnamAndCountFreq($str) {
		$str = strtolower($str);
		$countFreq = array();
		$array_token_sentence = explode('.', $str);

		pr("array_token_sentence:");
		foreach ($array_token_sentence as $key => $value) {
			pr($value);
		}

		for ($i=0; $i < count($array_token_sentence); $i++) {
			if(strlen(strstr($array_token_sentence[$i], "vietnam")) <= 0) {
				$array_token = explode(' ', $array_token_sentence[$i]);
				for ($j=0; $j < count($array_token); $j++) {
					if(!isset($countFreq[$array_token[$j]])) $countFreq[$array_token[$j]] = 1;
					else $countFreq[$array_token[$j]]++;
				}
			}
		}
		return $countFreq;
	}
?>

<?php
	// $count = array();
	// $count["Anhtu"] = 1;
	// $count["Nguyen"] = 2;
	// $count["abc"] = 5;
	// if(!isset($count["Trung"])) echo "chua xet<br>";
	// else $count["Trung"]++;
	// if(!isset($count["Anhtu"])) echo "chua xet<br>";
	// else $count["Anhtu"]++;
	
	// foreach ($count as $key => $value) {
	// 	pr($key.": ".$value);
	// }
	// $str_token = explode(' ', $str);
	// pr("str_token:");
	// for ($i=0; $i < count($kq); $i++) { 
	// 	pr($kq[$i]);
	// }
?>