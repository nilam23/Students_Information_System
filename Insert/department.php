<?php
	$servername = "localhost";
	$username =  "root";
	$password = "";
	$db_name = "student_information_system";
	$conn = new mysqli($servername, $username, $password, $db_name);

	if($conn -> connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

	$name = $_GET["d_name"];
	$id = $_GET["id"];
	$phone_no = (int)$_GET["ph_no"];
	$email = $_GET["email"];
	$school_name = $_GET["sch_name"];
	$sql = "INSERT INTO department VALUES('$name', '$id', '$phone_no', '$email', '$school_name')";

	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
	} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();
?>