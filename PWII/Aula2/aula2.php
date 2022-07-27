<html>
<head></head>
<body>
	<h1>Aula 2</h1>

	<?php
		$nota1 = $_POST["txtN1"];
		$nota2 = $_POST["txtN2"];
		$nota3 = $_POST["txtN3"];
		$media = ($nota1 + $nota2 + $nota3) / 3;

		if ($media >= 7) {
			echo 'A média é de: ' .$media. ' e o Aluno está APROVADO.';
		} else {
			echo 'A média é de: ' .$media. ' e o Aluno está REPROVADO.';
		}

		$num1 = $_POST["txtNa"];
		$num2 = $_POST["txtNb"];
		$num3 = $_POST["txtNc"];

		if ($num1 < $num2 && $num1 < $num3) {
		 	$Mn = $num1;
			echo "<p> O menor número é: ".$Mn. '.';

		} elseif ($num2 < $num1 && $num2 < $num3) {
			
			$Mn = $num2;
			echo "<p> O menor número é: ".$Mn.'.';

		} else {
			
			$Mn = $num3;
			echo "<p> O menor número é: ".$Mn.'.';
		
		}
		/* Função Min e Max
		echo 'O menor Número é'.(min($num1, $num2, $num3)).' .' ;
		echo 'O maior Número é'.(max($num1, $num2, $num3)).' .';*/

		$no1 = $_POST["txtNo1"];
		$no2 = $_POST["txtNo2"];
		$no3 = $_POST["txtNo3"];
		$no4 = $_POST["txtNo4"];
		$no5 = $_POST["txtNo5"];
		$media = ($no1 + $no2 + $no3 + $no4 + $no5 ) / 5;

		if ($media >= 9) {
			echo "<p>A média é de ".$media." e o aluno tirou MB.";
		
		} elseif ($media >= 7) {
			echo "<p>A média é de ".$media." e o aluno tirou B.";
		
		} elseif ($media >= 5) {
			echo "<p>A media é de ".$media." e o aluno tirou R.";

		} else {
			echo "<p>A media é de ".$media." e o aluno tirou I.";
		}


	?>
</body>
</html>