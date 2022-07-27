<html>
<head></head>
<body>
	<?php 
		if(isset($_GET["cod"])){
			//ALTERAR
			include('conexao.php');
			//SELECT
			$sql = "SELECT * FROM Clientes WHERE codigo = ".$_GET["cod"];
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				if($linha = $result->fetch_assoc()){
					$pagina = "alt.php";
					$codigo = $linha["codigo"];
					$nome = $linha["nome"];
					$endereco = $linha["endereco"];
					$foto = $linha["foto"];
				}
			}
		}else{
			//INSERIR
			$pagina = "ins.php";
			$codigo = "";
			$nome = "";
			$endereco = "";
			$foto = "";
		}

		echo '<form action="'.$pagina.'" method="post" enctype="multipart/form-data">';
		echo '  <input type="hidden" name="txtCodigo" value="'.$codigo.'"/>';
		echo '	Nome:<br/>';
		echo '	<input type="text" name="txtNome" value="'.$nome.'"/><br/>';
		echo '	Endereco:<br/>';
		echo '	<input type="text" name="txtEndereco" value="'.$endereco.'"/><br/>';
		if ($foto != ""){
			echo '  <img src="data:image/jpeg;base64,'.base64_encode($foto).'"/><br/>';
		}
		echo '  <input type="file" name="fileFoto"/><br/>';
		echo '	<input type="submit"/>';
		echo '</form>';
	?>	
</body>
</html>