<?php
	include('conexao.php');

	$cod = $_GET["cod"];
 
			$sql = "DELETE FROM clientes WHERE codigo='$cod' ";

			if (mysqli_query($conn, $sql)) {
				echo "<br> Data deleted successfully";
			
			} else {
				echo "Error deleting record: " . mysqli_error($conn);
			
			}

		mysqli_close($conn);

	header("location: clientes.php");
?>