<html>
<head></head>
<body>
	<h1>Aula 2</h1>

	<?php
		
		$n1 = $_POST["txtN1"];
		$mult = 0;
		$ant = 1;
		
		for ($i=2; $i <= $n1; $i++) { 
			$mult = $i * $ant;
			$ant = $mult;
		}
		echo '<p> O fatorial do Número: '.$n1. " é ".$mult ;
		

		$na = $_POST["txtNa"];
		$nb = $_POST["txtNb"];
		$soma = 0;

		if ($na < $nb) {
			for ($i=$na; $i <= $nb ; $i++) { 
			$soma = $soma + $i; 
			}
		} else {
			for ($i=$nb; $i <= $na ; $i++) { 
			$soma = $soma + $i;
			}
		}

		echo '<p> O resultado da soma dos números é: ' .$soma. "</p>" ;
	

		$nu1 = $_POST["txtNu1"];
		$nu2 = $_POST["txtNu2"];
		$tab = 0;

		if ($na < $nb) {
			
			echo "<table border='1'>";
			
			for ($i = 0 ; $i <= 10 ; $i++) { 
				echo "<tr>";
				for ($i2 = $nu1; $i2 <= $nu2 ; $i2++) { 
					$tab = $i * $i2;
					echo "<td>" .$i2. " X " .$i. " = ".$tab."</td>";
					
					
				}	
			}
			echo "</table>";

		} else {
			echo "<table border='1'>";
			
			for ($i = 0 ; $i <= 10 ; $i++) { 
				echo "<tr>";
				for ($i2 = $nu2; $i2 <= $nu1 ; $i2++) { 
					$tab = $i * $i2;
					echo "<td>" .$i2. " X " .$i. " = ".$tab."</td>";
					
					
			
					
				}
			}
			echo "</table>";

		}

	?>

</body>
</html>