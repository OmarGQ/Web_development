<?php
date_default_timezone_set('America/Mazatlan');
	//isset=> verifica si la variable existe o no
		$fecha1 = $_POST['edad'];
		$fecha  = new DateTime($fecha1);
		$now    = new DateTime();
		$edad   = $now->diff($fecha);
		echo $edad->y;
	echo "<div aling='center' ><a href='inicio1.html'>Regresar</a></div>";
	
?>