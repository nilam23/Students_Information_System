<?php
	$servername = "localhost";
	$username =  "root";
	$password = "";
	$db_name = "student_information_system";
	$conn = new mysqli($servername, $username, $password, $db_name);

	if($conn -> connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

	$f_name = $_GET["f_name"];
	$l_name = $_GET["l_name"];
	$roll_no = $_GET["roll"];
	$sem = (int)$_GET["sem"];
	$email = $_GET["email"];
	$phone = (int)$_GET["phone"];
	$sex = $_GET["sex"];
	$prog_name = $_GET["prog_name"];
	$dept_id = $_GET["dept_id"];
	$age = (int)$_GET["age"];

	$sql = "INSERT INTO student VALUES('$f_name', '$l_name', '$roll_no', '$sem', '$email', '$phone', '$sex', '$prog_name', '$dept_id', '$age')";

	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
	} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();
?>