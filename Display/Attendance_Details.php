<HTML>

<HEAD>
	<TITLE>Tezpur University > Attendance</TITLE>
	<LINK rel="stylesheet" href="style.css">
</HEAD>

<BODY>
<br /><br />
<H1 align = 'center'>Class Attendance:</H1>
<br />
<?php

	$roll = $_GET["roll_no"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student_information_system";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn -> connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}

	$sql =  "SELECT First_Name, Last_Name, S.Roll_No AS Roll, Course_Code, Classes_Present, Total_Classes, Percentage ".
		"from Student S, Attendance A where S.Roll_No = A.Roll_No and S.Roll_no = '" . $roll . "'";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>Roll No.</th>";
				echo "<th>Course Code</th>";
				echo "<th>Classes Present</th>";
				echo "<th>Total Classes</th>";
				echo "<th>Percentage</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["First_Name"]. " " . $row["Last_Name"] . "</td>";
				echo "<td align = 'center'>" . $row["Roll"]. "</td>";
				echo "<td align = 'center'>" . $row["Course_Code"] . "</td>";
				echo "<td align = 'center'>" . $row["Classes_Present"] . "</td>";
				echo "<td align = 'center'>" . $row["Total_Classes"] . "</td>";
				echo "<td align = 'center'>" . $row["Percentage"] . "%</td>";
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