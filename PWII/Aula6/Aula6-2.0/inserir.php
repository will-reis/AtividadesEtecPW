<?php
	$nome = $_POST["txtNome"];
	$endereco = $_POST["txtEndereco"];
	$email = $_POST["txtEmail"];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "myDB";

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

	if ($nome == "") {
			echo "Nenhum item especificado <br>";

		} else {

			$sql = "INSERT INTO users (nome, endereco, email)
			VALUES ('$nome' , '$endereco' , '$email' )";

			if (mysqli_query($conn, $sql)) {
				echo "Cadastrado. <br>";
			
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			
			}

		}

	$conn->close();

	header("location: index.php");
?>