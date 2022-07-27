<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<?php 
			if(isset($_GET["cod"])){
			//ALTERAR
			include('conexao.php');
			//SELECT
			$sql = "SELECT * FROM produtos WHERE codigo = ".$_GET["cod"];
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				if($linha = $result->fetch_assoc()){
				
				$pagina = "alterarProd.php";
				$cod = $linha['codigo'];
				$nome = $linha['nome'];
				$preco = $linha['preco'];
				$quant = $linha['quantidade'];
				$desc = $linha['descricao'];
				$alt = $linha['altura'];
				$larg = $linha['largura'];
				$prof = $linha['profundidade'];
				$peso = $linha['peso'];
				$fabri = $linha['fabricante'];
				$codbar = $linha['codbar'];
				$foto = $linha["imagem"];
				}
			}
		}else{
			//INSERIR
			$pagina = "inserirProd.php";
			$cod = "";
			$nome = "";
			$preco = "";
			$quant = "";
			$desc = "";
			$alt = "";
			$larg = "";
			$prof = "";
			$peso = "";
			$fabri = "";
			$codbar = "";
			$foto = "";
		}

		echo'<form action="'.$pagina.'" method="post" enctype="multipart/form-data">';

		echo '<input type="hidden" name="txtCod" value="'.$cod.'"/>';
		echo 	'Nome:<br/>';
		echo 		'<input type="text" name="txtNome" value="'.$nome.'"/><br/>';
		echo 	'Preço:<br/>';
		echo 		'<input type="text" name="txtPreco" value="'.$preco.'"/><br/>';
		echo 	'Quantidade:<br/>';
		echo 		'<input type="text" name="txtQuant" value="'.$quant.'"/><br/>';
		echo 	'Descrição:<br/>';
		echo 		'<input type="text" name="txtDesc" value="'.$desc.'"/><br/>';
		echo 	'Altura:<br/>';
		echo 		'<input type="text" name="txtAlt" value="'.$alt.'"/><br/>';
		echo 	'Largura:<br/>';
		echo 		'<input type="text" name="txtLarg" value="'.$larg.'"/><br/>';
		echo 	'Profundidade:<br/>';
		echo 		'<input type="text" name="txtProf" value="'.$prof.'"/><br/>';
		echo 	'Peso:<br/>';
		echo 		'<input type="text" name="txtPeso" value="'.$peso.'"/><br/>';
		echo 	'Fabricante:<br/>';
		echo 		'<input type="text" name="txtFabri" value="'.$fabri.'"/><br/>';
		echo 	'Código de Barras:<br/>';
		echo 		'<input type="text" name="txtCodBar" value="'.$codbar.'"/><br/>';
		echo 	'<br>';

		if ($foto != ""){
			echo '  <img src="data:image/jpeg;base64,'.base64_encode($foto).'"/><br/>';
		}
		echo '  <input type="file" name="fileFoto"/><br/>';
		
		echo 	'<input type="submit"/>';
		echo'</form>';
	?>
</body>
</html>