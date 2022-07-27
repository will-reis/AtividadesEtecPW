<?php 
	include('conexao.php');
	
	$codigo = $_GET["cod"];

	$sql = "DELETE FROM Clientes WHERE codigo = $codigo";
	$conn->query($sql);
	$conn->close();

	header("location:index.php");
?>