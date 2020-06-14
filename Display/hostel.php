<HTML>

<HEAD>
	<TITLE>Tezpur University > Hostel Boarders</TITLE>
	<LINK rel="stylesheet" href="style.css">
</HEAD>

<BODY>
<br /><br />
<H1 align = 'center'>Hostel Boarders List:</H1>
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

	$sql = "SELECT * from hostel order by hostel_name, room_no";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Roll No.</th>";
				echo "<th>Hostel Name</th>";
				echo "<th>Room No.</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["ROLL_NO"]. "</td>";
				echo "<td align = 'center'>" . $row["HOSTEL_NAME"] . "</td>";
				echo "<td align = 'center'>" . $row["ROOM_NO"] . "</td>";
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