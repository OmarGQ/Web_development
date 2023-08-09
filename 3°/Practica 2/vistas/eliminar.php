<!DOCTYPE html>
<html>
<head>
	<title>Kardex-eliminar</title>
</head>
<body>
	<?php
		$nombre = $_POST['nombre'];
		$grado = $_POST['grado'];
		$doc = new DOMDocument();
		$doc->load('../xml/kardex.xml');
		$nodoslista = $doc->getElementsByTagName('alumno');
		$remover=null;
		for ($i=0; $i < $nodoslista->length; $i++) { 
			$lista = $nodoslista->item($i)->childNodes;
			for ($j=0; $j < $lista->length; $j++) { 
				if (((string) $lista->item($j)->nodeName)=='nombre' && ((string) $lista->item($j)->nodeValue)==$nombre) {
					$remover = $nodoslista->item($i);
					break 2;
				}
			}
		}
		if ($remover!==null) {
			$remover->parentNode->removeChild($remover);
			$doc->save('../xml/kardex.xml');
		}
		require_once("ver.php");
	?>
</body>
</html>