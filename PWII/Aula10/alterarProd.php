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


	$sql = "UPDATE produtos SET nome='$nome' , preco='$preco' , quantidade='$quant' , descricao='$desc' , altura='$alt' , largura='$larg' , profundidade='$prof' , peso='$peso' , fabricante='$fabri' , codbar='$codbar' , imagem='$foto' WHERE codigo='$codigo' ";


	$conn->query($sql);
	$conn->close();

	header("location:produtos.php");
?>