<?php
	//isset=> verifica si la variable existe o no
	if (isset($_POST['clave'])&& strlen($_POST['clave'])) {
		//condicion para enpassr una variable
		if (isset($_POST['pass'])&& strlen($_POST['pass'])) {
			$clave = $_POST['clave'];
			$pass = $_POST['pass'];
			if ($clave == "admin") {
				if ($pass == "12345") {

					echo "<p>ingresaste</p>";					
				}else{
					echo "<p>contraseña incorrecta</p>";
				}		
			}else{
				echo "<p>clave incorrecao</p>";
			}
		}else{
			//escribir un dato en pantalla en caso de no cumplir la condicion
			echo "<p>falta la contraseña</p>";
		}
	}else{

		//escribir un dato en pantalla en caso de no cumplir la condicion

		echo "<p>falta la clave</p>";
	}
	echo "<div aling='center' ><a href='inicio.html'>Regresar</a></div>";
?>
