<style type="text/css">
	.city_wrapper {
	    float: left;
	    padding: 5px;
	    margin: 5px;
	}
	.district_wrapper {
	    float: left;
	    padding: 5px;
	    margin: 5px;
	}
</style>

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

	if (mysqli_num_rows($result) > 0) {
		echo '<div class="city_wrapper">';
		echo "<div style='margin-bottom: 5px;'>Chọn tỉnh/thành phố</div>";
		echo '<select id="city">';
	    while($row = mysqli_fetch_assoc($result)) {
	        echo '<option value="'.$row["id"] . '">' . $row["_name"] . '</option>'; 
	    }
	    echo "</select>";
	    echo '</div>';
	} else {
	    echo "0 results";
	}

	$sql = "SELECT _name FROM district WHERE _province_id = 1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo '<div class="district_wrapper">';
		echo "<div style='margin-bottom: 5px;'>Chọn quận/huyện</div>";
		echo '<select id="district">';
	    while($row = mysqli_fetch_assoc($result)) {
	        echo '<option value="'.$row["_name"] . '">' . $row["_name"] . '</option>'; 
	    }
	    echo "</select>";
	    echo '</div>';
	} else {
	    echo "0 results";
	}

	$conn->close();
?>
<script type="text/javascript">
	var city = document.getElementById("city");
	var district = document.getElementById("district");

	city.addEventListener("change", function() {
		console.log(city.value);
		//clear data of district dropdown
		district.innerHTML = "";

		//request data for district dropdown using AJAX
		var xhttp = new XMLHttpRequest();
	    xhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
				var response = JSON.parse(this.responseText);

				var data = "";
				for(var i = 0; i < response.length; i++) {
					data += '<option value="' + response[i]["_name"] + '">' + response[i]["_name"] + '</option>';
				}
				
				//set new data for district dropdown
				district.innerHTML = data;
	       }
	    };
	    xhttp.open("POST", "district_webservice.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xhttp.send("city_id=" + city.value); 

	})
</script>