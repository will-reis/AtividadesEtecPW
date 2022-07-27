<html>
<head></head>
<body>
	<h1>Aula 6</h1>

	<?php
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
		
		$sql = "SELECT id, nome, endereco, email FROM users";
		$result = mysqli_query($conn, $sql);

		echo "<table border='1'>";

		if (mysqli_num_rows($result) > 0) {
  
  		while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
    	echo "<td>Id: " . $row["id"]. "</td> <td>Nome: " . $row["nome"]. "</td> <td>Endereço: " . $row["endereco"]. "</td> <td>Email: " . $row["email"] ;
    	echo "</tr>";
  		}
		} else {
  		echo "0 resultados.";
		}

		echo "</table>";


		mysqli_close($conn);
		
?>

<form action="aula6.php" method="post">
			
			<p>Adicionar:</p>
			<p>Escreva o Nome: </p>
			<p><input type="text" name="txtN"></p>
			<p>Escreva o Endereço: </p>
			<p><input type="text" name="txtE"></p>
			<p>Escreva o Email: </p>
			<p><input type="text" name="txte"></p>
			<p><input type="submit" value="Enviar dados" /></p>


			<p><br>Deletar: </p>
			<p>Escolha um ID (número) para deletar: </p>
			<p><input type="text" name="txtNu"></p>
			<p><input type="submit" value="Enviar ID" /></p>

			<p><br>Alterar:</p>
			<p>Escolha um Id para Alterar: </p>
			<p><input type="text" name="txtIdA"></p>

			<p>Escolha o que Alterar: </p>
			<p>Nome: </p>
			<p><input type="text" name="txtNA"></p>
			<p>Endereço: </p>
			<p><input type="text" name="txtEA"></p>
			<p>Email:</p>
			<p><input type="text" name="txteA"></p>
			
			<p><input type="submit" value="Alterar" /></p>

		</form>




</body>
</html>