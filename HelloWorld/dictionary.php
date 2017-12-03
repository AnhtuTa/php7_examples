<?php
	$language = "en";
    $word = "project";
    $word_id = strtolower($word);   //word id is case sensitive and lowercase is required
    $url = "https://od-api.oxforddictionaries.com:443/api/v1/entries/$language/$word_id";
	$app_id = "78b2b576";
	$app_key = "a055c640653f62748e7c011f786f3ebf";
	// echo $json;
	// Now we need to display that json data!
	// $data_array = $json['items'];
	// foreach ($data_array as $data) {
	// 	foreach ($data as $key => $value) {
	// 		echo "<div style='color: blue'>$value</div>\n";
	// 	}
	// 	echo "<br>\n";
	// }

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'app_id: '. $app_id,
	    'app_key: '. $app_key
	));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$res = curl_exec($ch);
	$json = json_decode($res, true);
	curl_close($ch);

	// echo 'Type of $json = '.gettype($json).'<br>';	//array
	// echo 'Type of $res = '.gettype($res).'<br>';	//string

	// display necessary information
	$result = $json['results'][0];	//chỉ có results[0] thôi! Và $result là 1 JSON
	$lexicalEntry = $result['lexicalEntries'];	//Thằng này là 1 mảng các JSON
	foreach ($lexicalEntry as $json2) {
		$json3 = $json2['entries'][0];
		$arr = $json3['senses'];
		foreach ($arr as $json4) {
			if(isset($json4['definitions'][0])) $definition = $json4['definitions'][0];
			else $definition = "Không có định nghĩa:)";
			if(isset($json4['examples'][0]['text'])) $first_example = $json4['examples'][0]['text'];
			else $first_example = "Không có ví dụ :)";

			echo "<div>Definition: <span style='color: blue; font-weight: bold;'>$definition</span></div>";
			echo "<div>Example: <span style='color: cyan;'>$first_example</span></div><br>";
		}
	}


?>
