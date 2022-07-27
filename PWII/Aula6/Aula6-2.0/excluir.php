<?php
	$codigo = $_GET["cod"];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "myDB";

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 
			$sql = "DELETE FROM users WHERE id='$codigo' ";

			if (mysqli_query($conn, $sql)) {
				echo "<br> Data deleted successfully";
			
			} else {
				echo "Error deleting record: " . mysqli_error($conn);
			
			}

		mysqli_close($conn);

	header("location: index.php");
?>