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

	$sql =  "SELECT First_Name, Last_Name, Roll_No, Semester, Programme_Name, D.Name AS Department," . 
		" D.School_Name as School from Department D, Student St where St.Department_id = D.Id";
	$result = $conn -> query($sql);

	if(($result -> num_rows) > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>Roll No.</th>";
				echo "<th>Semester</th>";
				echo "<th>Programme</th>";
				echo "<th>Department</th>";
				echo "<th>School</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["First_Name"] . " " . $row["Last_Name"] ."</td>";
				echo "<td align = 'center'>" . $row["Roll_No"] . "</td>";
				echo "<td align = 'center'>" . $row["Semester"] . "</td>";
				echo "<td align = 'center'>" . $row["Programme_Name"] . "</td>";
				echo "<td align = 'center'>" . $row["Department"] . "</td>";
				echo "<td align = 'center'>" . $row["School"] . "</td>";
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