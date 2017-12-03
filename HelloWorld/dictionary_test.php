<?php
	$language = "en";
    $word = "computer";
    $word_id = strtolower($word);   //word id is case sensitive and lowercase is required
    $url = "https://od-api.oxforddictionaries.com:443/api/v1/entries/$language/$word_id";
	$app_id = "78b2b576";
	$app_key = "a055c640653f62748e7c011f786f3ebf";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'app_id: '. $app_id,
	    'app_key: '. $app_key
	));
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$res = curl_exec($ch);
	$json = json_decode($res, true);
	curl_close($ch);
?>
