<?php
	$codigo = $_POST["txtCodigo"];
	$nome = $_POST["txtNome"];
	$endereco = $_POST["txtEndereco"];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aula";

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

	$sql = "UPDATE cliente SET nome = '$nome', endereco = '$endereco' WHERE codigo = ".$codigo;
	$conn->query($sql);

	$conn->close();

	header("location: index.php");
?>