<HTML>

<HEAD>
	<TITLE>Tezpur University > Students</TITLE>
	<LINK rel="stylesheet" href="style.css">
</HEAD>

<BODY>
<br /><br />
<H1 align = 'center'>Our Undergraduate Students:</H1>
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

	$sql = "SELECT * from student order by roll_no";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>Roll No.</th>";
				echo "<th>Age</th>";
				echo "<th>Sex</th>";
				echo "<th>Semester</th>";
				echo "<th>Department</th>";
				echo "<th>Programme</th>";
				echo "<th>Contact No.</th>";
				echo "<th>E-mail</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]. "</td>";
				echo "<td align = 'center'>" . $row["ROLL_NO"]. "</td>";
				echo "<td align = 'center'>" . $row["AGE"] . "</td>";
				echo "<td align = 'center'>" . $row["SEX"] . "</td>";
				echo "<td align = 'center'>" . $row["SEMESTER"] . "</td>";
				echo "<td align = 'center'>" . $row["DEPARTMENT_ID"] . "</td>";
				echo "<td align = 'center'>" . $row["PROGRAMME_NAME"] . "</td>";
				echo "<td align = 'center'>" . $row["PHONE_NO"] . "</td>";
				echo "<td align = 'center'>" . $row["EMAIL"] . "</td>";
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