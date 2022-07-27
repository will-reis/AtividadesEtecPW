<?php 
	include('conexao.php');

	$nome = $_POST["txtNome"];
	$endereco = $_POST["txtEndereco"];

	$foto = addslashes(file_get_contents($_FILES['fileFoto']['tmp_name']));

	$sql = "INSERT INTO clientes VALUES (null, '$nome', '$endereco', '$foto');";
	$conn->query($sql);
	$conn->close();

	header("location:clientes.php");
?>