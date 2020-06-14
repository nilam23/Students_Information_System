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
	$hostel = $_GET["hostel"];
	$room_no = (int)$_GET["room"];
	$sql = "INSERT INTO hostel VALUES ('$roll_no', '$hostel', '$room_no')";

	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
	} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();
?>