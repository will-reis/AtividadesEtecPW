<html>
<head></head>
<body>
	<h1>Aula 7</h1>

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Aula7";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
  			die("Não Conectado: " . mysqli_connect_error());
		
		} else {
		
			$sql = "SELECT * FROM Produtos";
			$result = mysqli_query($conn, $sql);

			echo "<table border='1'>";

			if (mysqli_num_rows($result) > 0) {

				echo "<tr>";

				echo "<td>Código</td>";
				echo "<td>Nome</td>";
				echo "<td>Preço</td>";
				echo "<td>Quantidade</td>";
				echo "<td>Descrição</td>";
				echo "<td>Altura</td>";
				echo "<td>Largura</td>";
				echo "<td>Profundidade</td>";
				echo "<td>Peso</td>";
				echo "<td>Fabricante</td>";
				echo "<td>Código de Barras</td>";

				echo "</tr>";

	  		while($row = mysqli_fetch_assoc($result)) {
	    	
	    		echo "<tr>";

	    		echo "<td>". $row["codigo"]. "</td>";
	    		echo "<td>". $row["nome"]. "</td>";
	    		echo "<td>". $row["preco"]. "</td>";
	    		echo "<td>". $row["quantidade"]. "</td>";
	    		echo "<td>". $row["descricao"]. "</td>";
	    		echo "<td>". $row["altura"]. "</td>";
	    		echo "<td>". $row["largura"]. "</td>";
	    		echo "<td>". $row["profundidade"]. "</td>";
	    		echo "<td>". $row["peso"]. "</td>";
	    		echo "<td>". $row["fabricante"]. "</td>";
	    		echo "<td>". $row["codigo de barras"]. "</td>";

	    		echo "<td> <a href=excluir.php?cod=".$row["codigo"]. "> Excluir </a> </td>";
    			echo "<td> <a href=dados.php?cod=".$row["codigo"]. "> Alterar </a> </td>";

	    		echo "</tr>";

	    	}
	    		
			} else {
	  		echo "0 resultados.";
			
			}

		echo "</table>";
		}
		
		mysqli_close($conn);
		
?>

<a href="dados.php">Inserir dados.</a>

</body>
</html>