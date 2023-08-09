<?php
	$dia = $_REQUEST['dia'];
	$nombre = $_REQUEST['nom'];
	$mesa = $_REQUEST['mesa'];
	$cant = $_REQUEST['cant'];
	$HI = $_REQUEST['HI'];
	$HF = $_REQUEST['HF'];
	$mesas = $_REQUEST['json'];

	$dat[] = json_decode($mesas, true);
	$mesa1 = json_encode($dat);
	$r1 = str_replace("[", "", $mesa1, $contador);
	$r2 = str_replace("]", "", $r1, $contador);
	$listo ="[".$r2."]";
	$file = "json/mesas.json";
	file_put_contents($file, $listo);


	$data = file_get_contents("json/mesas".$dia.".json");
	$new = '{
		"nombre" : "'.$nombre.'",
		"mesa" : "'.$mesa.'",
		"cant" : '.$cant.',
		"HI" : "'.$HI.'",
		"HF" : "'.$HF.'"
	}';
	$newDat[] = json_decode($data, true);
	$newDat[] = json_decode($new, true);
	$json = json_encode($newDat);
	$resultado = str_replace("[", "", $json, $contador);
	$resultado2 = str_replace("]", "", $resultado, $contador);
	$ready ="[".$resultado2."]";
	$file = "json/mesas".$dia.".json";
	file_put_contents($file, $ready);
	
	header('Location: index.html');
?>