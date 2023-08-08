<?php
	//isset => verifica si la variable existe o no
	$datos = array(
		 $_GET['1'],
		 $_GET['2'],
		 $_GET['3'],
		 $_GET['4'],
		 $_GET['5'],
		 $_GET['6'],
		 $_GET['7'],
		 $_GET['8'],
		 $_GET['9'],
		 $_GET['10'],
		 $_GET['11'],
		 $_GET['12'],
		 $_GET['13'],
		 $_GET['14'],
		 $_GET['15'],
		 $_GET['16'],
		 $_GET['17'],
		 $_GET['18'],
		 $_GET['19'],
		 $_GET['20'],
	);
	$mayor = 0;
	for ($i=0; $i <=20 ; $i++) { 
		if ($mayor < $datos[$i]) {
			$mayor = $datos[$i];
		}
	}
	echo "<p>El mayor valor es: ".$mayor."</p>";
	echo"<div aling='center'><a href='inicio.html'>Regresar</a></div>";
?>