<html>
<head></head>
<body>
	<h1>Aula 6</h1>

	<?php
		$nome = $_POST["txtN"];
		$endereco = $_POST["txtE"];
		$email = $_POST["txte"];

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
		
		$sql = "INSERT INTO usuarios (nome, endereco, email)
		VALUES ('$nome' , '$endereco' , '$email' )";

		if (mysqli_query($conn, $sql)) {
			echo "Cadastrado.";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);

	?>

	<form action="index.php" method="post">
		<p><input type="submit" value="Ver Tabela" /></p>

	</form>


</body>
</html>