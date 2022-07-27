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
    	echo "<td>Id: " . $row["id"]. "</td>";
    	echo "<td>Nome: " . $row["nome"]. "</td>"; 
    	echo "<td>Endereço: " . $row["endereco"]. "</td>"; 
    	echo "<td>Email: " . $row["email"]. "</td>";
    	echo "<td> <a href=excluir.php?cod=".$row["id"]. ">Excluir </a> </td>";
    	echo "<td> <a href=mudar.php?cod=".$row["id"]. ">Alterar </a> </td>";
    	echo "</tr>";
  		}
		} else {
  		echo "0 resultados.";
		}

		echo "</table>";


		mysqli_close($conn);
		
?>

<a href="cadastro.php">Inserir dados.</a>

</body>
</html>