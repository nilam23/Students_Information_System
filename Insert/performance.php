<?php
	$servername = "localhost";
	$username =  "root";
	$password = "";
	$db_name = "student_information_system";
	$conn = new mysqli($servername, $username, $password, $db_name);

	if($conn -> connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

	$roll_no = $_GET["roll"];
	$semester = $_GET["sem"];
	$sgpa = (float)$_GET["sgpa"];
	$cgpa = (float)$_GET["cgpa"];
	$sql = "INSERT INTO performance VALUES('$roll_no', '$semester', '$sgpa', '$cgpa')";

	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
	} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();
?>