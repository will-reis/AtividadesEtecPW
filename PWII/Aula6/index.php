<html>
<head></head>
<body>
	<h1>Aula 6</h1>

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_users";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
  			die("Não Conectado: " . mysqli_connect_error());
		} else {
			echo "Conectado.";
		}
		
		$sql = "SELECT id, nome, endereco, email FROM usuarios";
		$result = mysqli_query($conn, $sql);

		echo "<table border='1'>";

		if (mysqli_num_rows($result) > 0) {
  
  		while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
    	echo "<td>ID: " . $row["id"]. "</td> <td>Nome: " . $row["nome"]. "</td> <td>Endereço: " . $row["endereco"]. "</td> <td>Email: " . $row["email"] ;
    	echo "</tr>";
  		}
		} else {
  		echo "0 resultados.";
		}

		echo "</table>";


		mysqli_close($conn);
?>

<form action="aula6.php" method="post">
			
			<p>Escreva o Nome: </p>
			<p><input type="text" name="txtN"></p>

			<p>Escreva o Endereço: </p>
			<p><input type="text" name="txtE"></p>

			<p>Escreva o Email: </p>
			<p><input type="text" name="txte"></p>

			<p><input type="submit" value="Enviar dados" /></p>
		</form>




</body>
</html>