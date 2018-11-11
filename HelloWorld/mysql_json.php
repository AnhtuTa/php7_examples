<?php
	$SERVER_NAME = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "5555";
	$DB_NAME = "guesthouse";

	$conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DB_NAME);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT p.id, p._name FROM province p";
	$result = mysqli_query($conn, $sql);
	$arr = array();
 	header('Content-Type: application/json; charset=utf-8');
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    $i = 0;
	    while($row = mysqli_fetch_assoc($result)) {
	        //echo "id: " . $row["id"]. " - Name: " . $row["_name"]. "<br>";
	        $arr[$i] = $row;
	        $i = $i + 1;
	    }
	} else {
	    echo "0 results";
	}
	$json_result = json_encode($arr, JSON_UNESCAPED_UNICODE);
	print $json_result;

	$conn->close();
?>