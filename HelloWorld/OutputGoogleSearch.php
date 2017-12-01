<?php
	$url = "https://www.google.com.vn/search?q=tai+sao";
	// $json_string = file_get_contents($url);
	// echo $json_string;

	$curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, $url);
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    $jsonData = curl_exec($curlSession);
    curl_close($curlSession);

    echo "jsonData = ".$jsonData;
?>
