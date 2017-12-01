<head>
	<title>php 7 vs MySQL demo</title>
	<meta charset="UTF-8">
</head>

<?php
	//print something
	function prSt($str) {
		echo $str."\n";
	}
	function prStln($str) {
		echo $str."<br>";
		echo "\n";
	}

	$host = 'localhost:3307';
	$user = 'root';
	$pass = '';
	$db_name = 'cakephp';

	//connect to DB
	$conn = mysqli_connect($host, $user, $pass, $db_name);
	if(!$conn) {
		echo "ERROR: Đéo connect tới mysql đc nhé!<br>";
		echo mysqli_connect_error()."<br>";
	} else echo "Connect successful! Host info: ".mysqli_get_host_info($conn)."<br>"."\n";

	// query something
	$conn->set_charset("utf8");		//display result in utf-8 format
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);

	// display result
	if(mysqli_num_rows($result) > 0) {
		prSt("<table style='border-collapse: collapse;' border='1'>");
		prSt("<tr>");
			prSt("<th>id</th>");
			prSt("<th>name</th>");
			prSt("<th>email</th>");
			prSt("<th>username</th>");
		prSt("</tr>");
		// Sử dụng vòng lặp để duyệt kết quả truy vấn
		while($row = mysqli_fetch_array($result)) {
			prSt("<tr>");
				prSt("<td>".$row['id']."</td>");
				prSt("<td>".$row['name']."</td>");
				prSt("<td>".$row['email']."</td>");
				prSt("<td>".$row['username']."</td>");
			prSt("</tr>");	
		}
		prSt("</table>");
	}
	// Free result set
    mysqli_free_result($result);



	mysqli_close($conn);
	echo "Close connect successful!<br>";

?>