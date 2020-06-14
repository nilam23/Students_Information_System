<?php
	$servername = "localhost";
	$username =  "root";
	$password = "";
	$db_name = "student_information_system";
	$conn = new mysqli($servername, $username, $password, $db_name);

	if($conn -> connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

	$r_no = $_GET["roll_no"];
	$c_code = $_GET["c_code"];
	$c_present = (int)$_GET["class_present"];
	$t_classes = (int)$_GET["total_classes"];
	$percent = (float)$_GET["percentage"];
	$sql = "INSERT INTO attendance VALUES('$r_no', '$c_code', '$c_present', '$t_classes', '$percent')";

	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
	} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();
?>