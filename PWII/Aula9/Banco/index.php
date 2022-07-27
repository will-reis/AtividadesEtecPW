<html>
	<head></head>
	<body>
		<?php 
			include('conexao.php');

			//SELECT
			$sql = "SELECT * FROM Clientes";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<table border = '1'>";
				echo "<tr>";
				echo "	<th>Código</th>";
				echo "	<th>Nome</th>";
				echo "	<th>Endereço</th>";
				echo "  <th>Foto</th>";
				echo "  <th></th>";
				echo "  <th></th>";
				echo "</tr>";
				while($linha = $result->fetch_assoc()) {
					echo "<tr>";
					echo "	<td>".$linha["codigo"]."</td>";
					echo "	<td>".$linha["nome"]."</td>";
					echo "	<td>".$linha["endereco"]."</td>";
					if ($linha["foto"] != ""){
						echo "	<td><img src='data:image/jpeg;base64,".base64_encode($linha['foto'])."' style='height:30px;width:30px'/></td>";
					}else{
						echo "  <td></td>";
					}
					echo "  <td><a href='dados.php?cod=".$linha["codigo"]."'><img src='editar.png' style='height:20px;width:20px'/></a></td>";
					echo "  <td><a href='exc.php?cod=".$linha["codigo"]."'><img src='excluir.png' style='height:20px;width:20px'/></a></td>";
					echo "</tr>";
				}
				echo "</table>";
			}else{
				echo "Não existem clientes cadastrados!";
			}
			$conn->close();
		?>
		<a href="dados.php">Inserir</a>
	</body>
</html>