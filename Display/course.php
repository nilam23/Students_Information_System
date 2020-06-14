<HTML>

<HEAD>
	<TITLE>Academics</TITLE>
	<LINK rel="stylesheet" href="style.css">
</HEAD>

<BODY>
<br /><br />
<H1 align = 'center'>Courses Offered:</H1>
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

	$sql = "SELECT * from course order by DEPARTMENT_ID, NAME";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>Course Code</th>";
				echo "<th>Credits</th>";
				echo "<th>Contact Hours</th>";
				echo "<th>Department ID</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["NAME"]. "</td>";
				echo "<td align = 'center'>" . $row["CODE"] . "</td>";
				echo "<td align = 'center'>" . $row["CREDITS"] . "</td>";
				echo "<td align = 'center'>" . $row["HOURS"] . "</td>";
				echo "<td align = 'center'>" . $row["DEPARTMENT_ID"] . "</td>";
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