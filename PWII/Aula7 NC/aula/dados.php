<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if (isset($_GET['cod'])){
			$codigo = $_GET['cod'];

			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "aula";

			$conn = new mysqli($servidor, $usuario, $senha, $banco);

			if ($conn->connect_error) {
			    die("Erro de conexão: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM cliente WHERE codigo = ".$codigo;
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				$linha = $result->fetch_assoc();

				$pagina = "alterar.php";
				$cod = $linha['codigo'];
				$nome = $linha['nome'];
				$endereco = $linha['endereco'];
			}else{
				die('Cliente Inválido!');
			}
		}else{
			$pagina = "inserir.php";
			$cod = "";
			$nome = "";
			$endereco = "";
		}

		echo '<form action="'.$pagina.'" method="post">';
		echo '	<input type="hidden" name="txtCodigo" value="'.$cod.'"/>';
		echo '	Nome:<br/>';
		echo '	<input type="text" name="txtNome" value="'.$nome.'"/><br/>';
		echo '	Endereço:<br/>';
		echo '	<input type="text" name="txtEndereco" value="'.$endereco.'"/><br/>';
		echo '	<input type="submit"/>';
		echo '</form>';
	?>
</body>
</html>