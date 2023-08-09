<?php
	//isset => verifica si la variable existe o no
	if (isset($_GET['ano'])) {
		//declarar variables
		$ano = $_GET['ano'];
		if (($ano%400)==0) {
			echo "<p>Es bisiesto</p>";
		}
		elseif(($ano%100)==0){
			echo "<p>No es bisiesto</p>";
		}
		elseif (($ano%4)==0) {
			echo "<p>Es bisiesto</p>";
		}else{
			echo "<p>No es bisiesto</p>";
		}
	}else{ //En caso de no encontrar valor
		//escribir dato en la pantalla
		echo "<p>Falta el valor</p>";
	}
	echo"<div aling='center'><a href='inicio.html'>Regresar</a></div>";
?>