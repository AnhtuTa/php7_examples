<?php
	//$url = "https://od-api.oxforddictionaries.com/api/v1/entries/{source_lang}/{word_id}/synonyms";
	$language = "en";
    $word = "school";
    $word_id = strtolower($word);   //word id is case sensitive and lowercase is required
    $url = "https://od-api.oxforddictionaries.com:443/api/v1/entries/$language/$word_id";
    header("app_id: 78b2b576");
    header("app_key: a055c640653f62748e7c011f786f3ebf");
	$json_string = file_get_contents($url);		//$json_string có kiểu String
	$json = json_decode($json_string, true);	//$json có kiểu object, nó sẽ là 1 JSON

	echo $json;
	// Now we need to display that json data!
	// $data_array = $json['items'];
	// foreach ($data_array as $data) {
	// 	foreach ($data as $key => $value) {
	// 		echo "<div style='color: blue'>$value</div>\n";
	// 	}
	// 	echo "<br>\n";
	// }
?>
