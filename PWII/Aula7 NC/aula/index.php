<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "aula";

		$conn = new mysqli($servidor, $usuario, $senha, $banco);

		if ($conn->connect_error) {
		    die("Erro de conexão: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM cliente";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table border='1'>";
			echo "	<tr>";
			echo "		<th>Código</th>";
			echo "		<th>Nome</th>";
			echo "		<th>Endereço</th>";
			echo "		<th></th><th></th>";
			echo "  </tr>";
		    while($linha = $result->fetch_assoc()) {
		    	echo "<tr>";
		    	echo "	<td>".$linha["codigo"]."</td>";
		    	echo "	<td>".$linha["nome"]."</td>";
		    	echo "	<td>".$linha["endereco"]."</td>";
		    	echo "	<td><a href='dados.php?cod=".$linha["codigo"]."'><img src='editar.png' style='width:20px;height:20px'/></a></td>";
		    	echo "	<td><a href='excluir.php?cod=".$linha["codigo"]."'><img src='excluir.png' style='width:20px;height:20px'/></a></td>";
		    	echo "</tr>";
		    }
		    echo "</table>";
		}else{
			echo "Não há clientes cadastrados!";
		}
		$conn->close();
	?>
	<a href="dados.php">Inserir</a>
</body>
</html>