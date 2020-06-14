<HTML>

<HEAD>
	<TITLE>Academics</TITLE>
	<LINK rel="stylesheet" href="style.css">
</HEAD>

<BODY>
<br /><br />
<H1 align = 'center'>Academic Data:</H1>
<br />
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student_information_system";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn -> connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}

	$sql = "SELECT * from academics";
	$result = $conn -> query($sql);

	if(($result -> num_rows) > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Roll No.</th>";
				echo "<th>Course Code</th>";
				echo "<th>Test 1</th>";
				echo "<th>Test 2</th>";
				echo "<th>Test 3</th>";
				echo "<th>Test 4</th>";
				echo "<th>Grades</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["ROLL_NO"]. "</td>";
				echo "<td align = 'center'>" . $row["COURSE_CODE"] . "</td>";
				echo "<td align = 'center'>" . $row["TEST_1"] . "</td>";
				echo "<td align = 'center'>" . $row["TEST_2"] . "</td>";
				echo "<td align = 'center'>" . $row["TEST_3"] . "</td>";
				echo "<td align = 'center'>" . $row["TEST_4"] . "</td>";
				echo "<td align = 'center'>" . $row["GRADES"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";	
	}
	else{
		echo "No Data Found";
	}
	$conn->close();
?>
</BODY>
</HTML>