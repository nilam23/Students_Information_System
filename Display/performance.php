<HTML>

<HEAD>
	<TITLE>Tezpur University > Student Performances</TITLE>
	<LINK rel="stylesheet" href="style.css">
</HEAD>

<BODY>
<br /><br />
<H1 align = 'center'>Student's Previous Performances:</H1>
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

	$sql = "SELECT * from performance order by roll_no, semester";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Roll No.</th>";
				echo "<th>Semester</th>";
				echo "<th>SGPA</th>";
				echo "<th>CGPA</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["ROLL_NO"]. "</td>";
				echo "<td align = 'center'>" . $row["SEMESTER"] . "</td>";
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