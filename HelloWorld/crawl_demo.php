<html>
<head>
	<title>Demo crawl</title>
</head>
<body>
	<?php
		include('simple_html_dom.php');
		// $html = file_get_html('http://www.google.com');
		// foreach ($html->find('img') as $element) {
		// 	echo "<img src='".$element->src."'/><br/>";
		// }

	    $url = 'https://en.wikipedia.org/wiki/Nami_(One_Piece)';
	    $html = file_get_html($url);

	    //Hiển thị tất cả các ảnh
	    foreach($html->find('img') as $element) {
			echo '<img src="'.$element->src.'" /><br>';
		}

		//Hiển thị tất cả các link trong bài viết.
		foreach ($html->find('a') as $element) {
			echo $element->href."<br/>";
			//echo $element."<br/>";
			//echo "<a href='".$element->href."'>".$element->href."</a>";
		}
	?>
</body>
</html>
