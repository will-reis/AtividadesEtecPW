<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<?php
			$servername = "localhost";
			$database = "hospital";
			$username = "root";
			$password = "";
			
			$conn = mysqli_connect($servername, $username, $password, $database);
		
			$sql = "SELECT * FROM paciente";
			$result = $conn->query($sql);

			echo "<br>";

			if ($result->num_rows > 0) {

				"<td>"
  				while($row = $result->fetch_assoc()) {
    				echo "<br>id: " . "<tr>"$row["id"]. "<br>Name: " . $row["nome"]. "<br> " . $row["endereco"]."<br>". $row["endereco"] ."<br><br>";
  				}
  				"</td>"
			} else {
	  			echo "0 results";
			}
			$conn->close();
		?>

	</body>
</html>
	