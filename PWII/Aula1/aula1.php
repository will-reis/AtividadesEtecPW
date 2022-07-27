<html>
<head></head>
<body>
		<?php
			$km = $_POST["txtQ"];
			$milhas = $km * 0.621371;
				echo '<p> O valor em milhas é: '.$milhas.'.</p>';
			
			$C = $_POST["txtC"];
			$F = ($C * 1.8) + 32;
				echo '<p>A temperatura em Fahrenheit é: '.$F. '. </p>';

			$N1 = $_POST["txtN1"];
			$N2 = $_POST["txtN2"];
			$N3 = $_POST["txtN3"];
			$N4 = $_POST["txtN4"];
			$media = ($N1 + $N2 + $N3 + $N4) / 4;

			echo '<p> A média das notas é de: ' .$media. '.</p>';
		?>
</body>
</html>