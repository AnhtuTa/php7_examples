<?php require("simple_html_dom.php"); ?>
<?php
	function file_get_contents_curl($url) {
	    $ch = curl_init();

	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
	    curl_setopt($ch, CURLOPT_URL, $url);

	    $data = curl_exec($ch);
	    curl_close($ch);

	    return $data;
	}

	$url = "https://www.google.com.vn/search?q=tai+sao&num=5&ie=UTF-8";
	// $json = file_get_contents($url);

	// echo $json;
	//$data = json_decode($json);
	//echo $data;

	// Create DOM from URL or file
	// $html = file_get_html($url);

	// Find all links 
	// foreach($html->find('a') as $element) {
	// 	echo $element->href . '<br>';
	// }

	$url2 = "https://wordsapiv1.p.mashape.com/words/shit/definitions";
	$json_string = file_get_contents($url2);
	echo $json_string;
?>