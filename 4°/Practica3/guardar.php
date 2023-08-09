<?php
	$mesas = $_REQUEST['json'];

	$dat[] = json_decode($mesas, true);
	$mesa1 = json_encode($dat);
	$r1 = str_replace("[", "", $mesa1, $contador);
	$r2 = str_replace("]", "", $r1, $contador);
	$listo ="[".$r2."]";
	$file = "json/mesas.json";
	file_put_contents($file, $listo);

	header('Location: index.html');
?>