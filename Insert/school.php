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
	$ph_no = (int)$_GET["ph_no"];
	$email = $_GET["email"];
	
	$sql = "INSERT INTO school VALUES('$name', '$ph_no', '$email')";

	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
	} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();
?>