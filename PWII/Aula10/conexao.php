<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "loja";

	// Criar conexão
	$conn = new mysqli($servidor, $usuario, $senha, $banco);
	// Verificar Conexão

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	}
?>