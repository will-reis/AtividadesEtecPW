<?php
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

	if ($nome == "") {
			echo "Nenhum item especificado <br>";

		} else {

			$sql = "INSERT INTO Produtos VALUES (NULL, '$nome', '$preco', '$quant', '$desc', '$alt', '$larg', '$prof', '$peso', '$fabri', '$codbar')";

			if (mysqli_query($conn, $sql)) {
				echo "Cadastrado. <br>";
			
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			
			}

		}

	$conn->close();

	header("location: index.php");
?>