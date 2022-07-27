<?php 
	include('conexao.php');

	$codigo = $_POST["txtCod"];
	$nome = $_POST["txtNome"];
	$preco = $_POST["txtPreco"];
	$quant = $_POST["txtQuant"];
	$desc = $_POST["txtDesc"];
	$alt = $_POST["txtAlt"];
	$larg = $_POST["txtLarg"];
	$prof = $_POST["txtProf"];
	$peso = $_POST["txtPeso"];
	$fabri = $_POST["txtFabri"];
	$codbar = $_POST["txtCodBar"];
	$foto = addslashes(file_get_contents($_FILES['fileFoto']['tmp_name']));


	$sql = "INSERT INTO produtos VALUES (null, '$nome', '$preco', '$quant' , '$desc', '$alt', '$larg', '$prof', '$peso', '$fabri', '$codbar', '$foto');";
	$conn->query($sql);
	$conn->close();


	header("location:produtos.php");
?>