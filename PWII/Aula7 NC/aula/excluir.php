<?php
	$codigo = $_GET["cod"];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aula";

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

	$sql = "DELETE FROM cliente WHERE codigo = ".$codigo;
	$conn->query($sql);

	$conn->close();

	header("location: index.php");
?>