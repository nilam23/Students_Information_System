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

	$roll_no = $_GET["Roll_No"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student_information_system";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn -> connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}

	$sql = 	"SELECT First_Name, Last_Name, S.Roll_No AS Roll, P.Semester As Sem, SGPA, CGPA " .
	 	"from student S, performance P where S.Roll_no = P.Roll_No and S.Roll_No = '" . $roll_no . "'";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Roll No.</th>";
				echo "<th>Name</th>";
				echo "<th>Semester</th>";
				echo "<th>SGPA</th>";
				echo "<th>CGPA</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["Roll"]. "</td>";
				echo "<td align = 'center'>" . $row["First_Name"] . " " . $row["Last_Name"] . "</td>";
				echo "<td align = 'center'>" . $row["Sem"] . "</td>";
				echo "<td align = 'center'>" . $row["SGPA"] . "</td>";
				echo "<td align = 'center'>" . $row["CGPA"] . "</td>";
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