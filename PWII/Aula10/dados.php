<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
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
					$pagina = "alterar.php";
					$cod = $linha["codigo"];
					$nome = $linha["nome"];
					$endereco = $linha["endereco"];
					$foto = $linha["foto"];
				}
			}
		}else{
			//INSERIR
			$pagina = "inserir.php";
			$cod = "";
			$nome = "";
			$endereco = "";
			$foto = "";
		}

		echo '<form action="'.$pagina.'" method="post" enctype="multipart/form-data">';
		echo '  <input type="hidden" name="txtCodigo" value="'.$cod.'"/>';
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