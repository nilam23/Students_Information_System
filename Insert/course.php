<?php
	$servername = "localhost";
	$username =  "root";
	$password = "";
	$db_name = "student_information_system";
	$conn = new mysqli($servername, $username, $password, $db_name);

	if($conn -> connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

	$name = $_GET["name"];
	$c_code = $_GET["code"];
	$hours = (int)$_GET["hours"];
	$credits = (int)$_GET["credits"];
	$dept_id = $_GET["dept_id"];
	$sql = "INSERT INTO course VALUES('$name', '$c_code', '$hours', '$credits', '$dept_id')";

	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
	} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();
?>