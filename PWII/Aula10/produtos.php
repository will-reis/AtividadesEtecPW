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
  text-decoration: none;
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
  text-decoration: none;
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

/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

  .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: orangered;
  color: white;
  text-align: center;
  }

</style>

</head>
<body>

   <div class="header">
  <a href="index.php" class="logo">Lojinha</a>
  <div class="header-right">
    <a class="active" href="index.php">Menu</a>
    <a href="produtos.php">Produtos</a>
    <a href="clientes.php">Clientes</a>
  </div>
</div>


  
  <?php
     include('conexao.php');
      
      $sql = "SELECT * FROM produtos";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {

          echo '<div class="card">';

          echo '<p> <buttonAlt> <a href=dadosProd.php?cod='.$row["codigo"].'>Alterar</button></a></p>';
          echo '<p> <buttonExc> <a href=excluirProd.php?cod='.$row["codigo"].'>Excluir</button></a></p>';

          if ($row["imagem"] != ""){
            echo "  <td><img src='data:image/jpeg;base64,".base64_encode($row['imagem'])."' style='height:200px;width:300px;padding:10px'/></td>";
          }else{
            echo "  <td></td>";
          }

          echo '<h1>'. $row["nome"]. '<h1>';
          echo '<h1>R$ '. $row["preco"]. '<h1>';
          echo '<p class=p>Descrição: '. $row["descricao"].'</p>';

          echo '</div>';

        }
          
      } else {
        echo "0 resultados.";
      
      }


    echo '<p><a href=dadosProd.php>Inserir Produto</a></p>';
?>

</body>

<div class="footer">
  <p>Lojinha</p>
</div>

</html>