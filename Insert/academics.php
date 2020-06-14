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
	$t1 = (int)$_GET["t1"];
	$t2 = (int)$_GET["t2"];
	$t3 = (int)$_GET["t3"];
	$t4 = (int)$_GET["t4"];
	$grades = $_GET["grades"];
	$sql = "INSERT INTO academics (ROLL_NO, COURSE_CODE, TEST_1, TEST_2, TEST_3, TEST_4, GRADES) VALUES('$r_no', '$c_code', '$t1', '$t2', '$t3', '$t4' , '$grades')";

	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
	} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();
?>