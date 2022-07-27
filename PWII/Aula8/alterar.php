<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php

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

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "Aula7";

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

	$sql = "UPDATE produtos SET nome='$nome' , preco='$preco' , quantidade='$quant' , descricao='$desc' , altura='$alt' , largura='$larg' , profundidade='$prof' , peso='$peso' , fabricante='$fabri' , codigo de barras='$codbar' WHERE codigo='$codigo' ";

	$conn->query($sql);

	$conn->close();

	header("location: index.php");
?>
</body>
</html>