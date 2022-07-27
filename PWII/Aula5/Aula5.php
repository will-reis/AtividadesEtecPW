<html>
<head></head>
<body>
	<h1>Aula 5</h1>

	<?php
		
		$Pa = $_POST["txtPa"];
		$La	= $_POST["txtLa"];
		$Paq = 0;
		


		for ($i=0; $i < strlen($Pa); $i++) { 
			if (substr($Pa, $i , 1) == $La) {
				$Paq = $Paq + 1;
			}
		}
		echo "A ocorrência da letra ".$La." é de ".$Paq."<br>";

		$Pb = $_POST["txtPb"];
		$Lb = $_POST["txtLb"];
		$Lbt = $_POST["txtLbt"];

		for ($i=0; $i < strlen($Pb); $i++) { 
			if ($Lb == substr($Pb, $i, 1)) {
				echo $Lbt;							

			} else {
				echo substr($Pb, $i, 1);

			}
		}

		$N = $_POST["txtN"];
		$soma = 0;

		for ($i=0; $i < strlen($N); $i++) { 
			$soma = $soma + substr($N, $i, 1);
		}
		echo "<br> A soma é ".$soma;
	?>

</body>
</html>