<html>
<head>
	<style type="text/css">
	
	.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  float: left;
  margin: 10px;
  padding: 10px;
  position: relative;
}

.price {
  color: grey;
  font-size: 22px;
}


.card buttonComp {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card buttonExc {
  position: absolute;
  top: 8px;
  right: 70px;
  height: 20px;
  width: 50px;
  border: none;
  outline: 0;
  color: white;
  background-color: orangered;
  text-align: center;
  cursor: pointer;
  font-size: 15px;
}

.card buttonAlt {
  position: absolute;
  top: 8px;
  right: 16px;
  height: 20px;
  width: 50px;
  border: none;
  outline: 0;
  color: white;
  background-color: steelblue;
  text-align: center;
  cursor: pointer;
  font-size: 15px;
}

.card buttonComp:hover {
  opacity: 0.7;
}

.card buttonExc:hover {
  opacity: 0.7;
}

.card buttonAlt:hover {
  opacity: 0.7;
}

</style>

</head>
<body>
	<h1>Aula 8</h1>
	
	<?php
	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Aula7";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
  			die("Não Conectado: " . mysqli_connect_error());
		
		} else {
			
			$sql = "SELECT * FROM Produtos";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {

					echo '<div class="card">';
					echo '<p class="button"><buttonAlt> <a href=dados.php?cod='.$row["codigo"]. '>Alterar</button></p>';
					echo '<p class="button"><buttonExc> <a href=excluir.php?cod=' .$row["codigo"]. '>Excluir</a></button></p>';
	  				echo '<h1>'. $row["nome"]. '<h1>';
	  				echo '<p class="price">R$ '. $row["preco"].'</p>';
	  				echo '<p>'. $row["descricao"].'</p>';
	 				echo '<p><buttonComp>Adicionar no Carrinho</button></p>';
					echo '</div>';

				}
	    		
			} else {
	  		echo "0 resultados.";
			
			}

		}

?>

</body>
</html>