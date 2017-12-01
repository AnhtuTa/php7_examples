<?php
	class DatabaseUtils {
		var $host = 'localhost:3307';
		var $user = 'root';
		var $pass = '';
		var $db_name = 'cakephp';
		var $conn;

		function connect() {
			$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
			if(!$this->conn) {
				echo "<div style='color: red'>ERROR: Đéo connect tới mysql đc nhé!</div>";
				echo mysqli_connect_error()."<br>";
				return null;
			} else {
				echo "Connect successful! Host info: ".mysqli_get_host_info($this->conn)."<br>"."\n";
				$this->conn->set_charset("utf8");		//display result in utf-8 format
				return $this->conn;
			}
		}

		function selectAllStudents() {
			$sql = "SELECT * FROM students";
			return mysqli_query($this->conn, $sql);
		}

		function insertStudent($id, $name) {
			$sql = "INSERT INTO students(id, name) VALUES($id, \"$name\")";
			if (mysqli_query($this->conn, $sql)) {
				return true;
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
			    return false;
			}
		}

		function updateStudent($id, $new_name) {
			$sql = "UPDATE students SET name = \"$new_name\" WHERE id = $id";
			if (mysqli_query($this->conn, $sql)) {
				return true;
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
			    return false;
			}
		}

		function deleteStudent($id) {
			$sql = "DELETE FROM students WHERE id = $id";
			if (mysqli_query($this->conn, $sql)) {
				return true;
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
			    return false;
			}
		}

		function closeConn() {
			mysqli_close($this->conn);
		}
	}
?>