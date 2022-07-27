<html>
<head></head>
<body>
	<h1>Aula 6</h1>

	<?php

	//Variaveis
	
		$nome = $_POST["txtN"];
		$endereco = $_POST["txtE"];
		$email = $_POST["txte"];
		$id = $_POST["txtNu"];

		$ida = $_POST["txtIdA"];
		$noa = $_POST["txtNA"];
		$enda = $_POST["txtEA"];
		$ema = $_POST["txteA"];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "myDB";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

	//Conectar MySQL

		if (!$conn) {
  			die("Não Conectado: " . mysqli_connect_error());
		} else {
			echo "Conectado. <br>";
		}
		
	//Inserir Dados

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

		//Deletar pela ID

		if ($id == "") {
			echo "nenhum id especificado <br>";
		
		} else {
			$sql = "DELETE FROM users WHERE id='$id' ";

			if (mysqli_query($conn, $sql)) {
				echo "<br> Data deleted successfully";
			
			} else {
				echo "Error deleting record: " . mysqli_error($conn);
			
			}
		}


		//Alterar Dados

		if ($ida == "") {
			echo "Nenhuma ID inserida";
		
		} else {
			if ($noa == "") {
				echo "Nenhum nome inserido.";
			
			} else {
				$sql = "UPDATE users SET nome ='$noa' WHERE id='$ida'";

				if (mysqli_query($conn, $sql)) {
					echo "Nome Atualizado <br>";
				
				} else {
					echo "Error updating record: " . mysqli_error($conn);

				}
			}

			if ($enda == "") {
				echo "Nenhum endereço inserido.";
			
			} else{
				$sql = "UPDATE users SET endereco ='$enda' WHERE id='$ida'";

				if (mysqli_query($conn, $sql)) {
					echo "Endereço Atualizado <br>";
				
				} else {
					echo "Error updating record: " . mysqli_error($conn);

				}
			}

			if ($ema == "") {
				echo "Nenhum email inserido.";
			
			} else{
				$sql = "UPDATE users SET email ='$ema' WHERE id='$ida'";

				if (mysqli_query($conn, $sql)) {
					echo "Endereço Atualizado <br>";
				
				} else {
					echo "Error updating record: " . mysqli_error($conn);

				}
			}

		}

		

		mysqli_close($conn);

	?>

	<form action="index.php" method="post">
		<p><input type="submit" value="Ver Tabela" /></p>

	</form>

</body>
</html>