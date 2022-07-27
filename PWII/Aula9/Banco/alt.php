<?php 
	include('conexao.php');

	$codigo = $_POST["txtCodigo"];
	$nome = $_POST["txtNome"];
	$endereco = $_POST["txtEndereco"];

	$foto = addslashes(file_get_contents($_FILES['fileFoto']['tmp_name']));

	$sql = "UPDATE Clientes SET nome='$nome', endereco='$endereco', foto='$foto' WHERE codigo = $codigo";
	$conn->query($sql);
	$conn->close();
	
	header("location:index.php");
?>