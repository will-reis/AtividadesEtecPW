<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
		$id = $_GET["cod"];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "myDB";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
  			die("Não Conectado: " . mysqli_connect_error());
		} else {
			echo "Conectado. <br>";
		}
		
		$sql = "SELECT nome, endereco, email WHERE id='$id' ";
		$result = mysqli_query($conn, $sql);
	?>

	<form action="alterar.php" method="post">
		
		Nome:<br/>
		<input type="text" name="txtNome" value="" /><br/>
		Endereço:<br/>
		<input type="text" name="txtEndereco" value="" /><br/>
		Email:<br/>
		<input type="text" name="txtEmail" value="" /><br/>
		
		<input type="submit"/>

	</form>

</body>
</html>