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
  right: 10px;
  height: 20px;
  width: 50px;
  border: none;
  outline: 0;
  color: white;
  background-color: steelblue;
  text-align: center;
  cursor: pointer;
  font-size: 15px;
  color: white;
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

.p{
  color: grey;
  font-size: 20px;
}

</style>

</head>
<body>
	<h1>Aula 9</h1>
	
	<?php
	   include('conexao.php');
			
			$sql = "SELECT * FROM clientes";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {

					echo '<div class="card">';

					echo '<p> <buttonAlt> <a href=dados.php?cod='.$row["cod"].'>Alterar</button></a></p>';
					echo '<p> <buttonExc> <a href=excluir.php?cod='.$row["cod"].'>Excluir</button></a></p>';

          if ($row["foto"] != ""){
            echo "  <td><img src='data:image/jpeg;base64,".base64_encode($row['foto'])."' style='height:200px;width:300px;padding:10px'/></td>";
          }else{
            echo "  <td></td>";
          }

	  			echo '<h1>'. $row["nome"]. '<h1>';
	  			echo '<p class=p>Endereço: '. $row["endereco"].'</p>';

					echo '</div>';

				}
	    		
			} else {
	  		echo "0 resultados.";
			
			}


    echo '<p><a href=dados.php>Inserir Cliente</a></p>';
    

?>

</body>
</html>