<?php
	//isset => verifica si la variable existe o no
	if (isset($_GET['multiplicando']) && (strlen($_GET['multiplicando'])>0)) {
		if (isset($_GET['multiplicador']) && (strlen($_GET['multiplicador'])>0)) {
			//declarar variables
			$multiplicando = $_GET['multiplicando'];
			$multiplicador = $_GET['multiplicador'];
			echo "<p>Generando la tabla de multiplicar</p>";
			for ($i=0; $i <= $multiplicador; $i++) { 
				echo "$multiplicando * $i = ".($multiplicando * $i)."<br />";
			}
		}else{ //En caso de no encontrar valor
			//escribir dato en la pantalla
			echo "<p>Falta el valor del multiplicador</p>";
		}
	}else{ //En caso de no encontrar valor
		//escribir dato en la pantalla
		echo "<p>Falta el valor del multiplicando</p>";
	}
	echo"<div aling='center'><a href='inicio.html'>Regresar</a></div>";
?>