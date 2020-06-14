<HTML>

<HEAD>
	<TITLE>Academics</TITLE>
	<LINK rel="stylesheet" href="style.css">
</HEAD>

<BODY>
<br /><br />
<H1 align = 'center'>Class Attendance:</H1>
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

	$sql = "SELECT * from attendance";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Roll No.</th>";
				echo "<th>Course Code</th>";
				echo "<th>Classes Present</th>";
				echo "<th>Total Classes</th>";
				echo "<th>Percentage</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["ROLL_NO"]. "</td>";
				echo "<td align = 'center'>" . $row["COURSE_CODE"] . "</td>";
				echo "<td align = 'center'>" . $row["CLASSES_PRESENT"] . "</td>";
				echo "<td align = 'center'>" . $row["TOTAL_CLASSES"] . "</td>";
				echo "<td align = 'center'>" . $row["PERCENTAGE"] . "%</td>";
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