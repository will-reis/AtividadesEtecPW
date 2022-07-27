<html>
<head></head>
<body>
	<h1>Aula 4</h1>

	<?php
		$n1 = $_POST["txtN1"];
		$n2 = $_POST["txtN2"];
		$n3 = $_POST["txtN3"];

		$n1m = strlen($n1) /2;
		$n2m = strlen($n2) /2;
		$n3m = strlen($n3) /2;

		/*echo "1. ".$n1m."<br>";
		echo "2. ".$n2m."<br>";
		echo "3. ".$n3m."<br>";*/
		echo "A junção dos Nomes é: ";
		echo substr($n1, 0, $n1m);
		echo substr($n2, 0, $n2m);
		echo substr($n3, 0, $n3m)."<br><br>";


		$na = $_POST["txtNa"];
		$naq = strlen($na);

		for ($i=0; $i < $naq; $i++) { 
			echo substr($na, $i, 1)."</br>";
		}


		$no1 = $_POST["txtNo1"];

		echo "<br>";
		for ($i = strlen($no1); $i >= 0; $i--) { 
			echo substr($no1, $i, 1);
		}

	?>

</body>
</html>