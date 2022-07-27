<?php 
	include('conexao.php');

	$cod = $_POST["txtCodigo"];
	$nome = $_POST["txtNome"];
	$endereco = $_POST["txtEndereco"];

	$foto = addslashes(file_get_contents($_FILES['fileFoto']['tmp_name']));

	$sql = "UPDATE clientes SET nome='$nome', endereco='$endereco', foto='$foto' WHERE codigo = $cod";
	$conn->query($sql);
	$conn->close();
	
	header("location:clientes.php");
?>