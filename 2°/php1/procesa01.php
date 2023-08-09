<?php
	//isset => verifica si la variable existe o no
	if (isset($_POST['dividendo']) && (strlen($_POST['dividendo'])>0)) {
		if (isset($_POST['divisor']) && (strlen($_POST['divisor'])>0)) {
			//declarar variables
			$dividendo = $_POST['dividendo'];
			$divisor = $_POST['divisor'];
			if ($divisor == 0) {
				echo "<p>Error imposible de realizar</p>";
			}else{
				echo "<p>La divicion de $dividendo / $divisor es ".($dividendo/$divisor)."</p>";
			}
		}else{ //En caso de no encontrar valor
			//escribir dato en la pantalla
			echo "<p>Falta el valor del divisor</p>";
		}
	}else{ //En caso de no encontrar valor
		//escribir dato en la pantalla
		echo "<p>Falta el valor del dividendo</p>";
	}
	echo"<div aling='center'><a href='inicio.html'>Regresar</a></div>";
?>