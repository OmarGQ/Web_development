<?php
		$id = $_POST['id'];
		$doc = new DOMDocument();
		$doc->load('xml/carro.xml');
		$nodoslista = $doc->getElementsByTagName('cliente');
		$remover=null;
		for ($i=0; $i < $nodoslista->length; $i++) { 
			$lista = $nodoslista->item($i)->childNodes;
			for ($j=0; $j < $lista->length; $j++) { 
				if (((string) $lista->item($j)->nodeName)=='id' && ((string) $lista->item($j)->nodeValue)==$id) {
					$remover = $nodoslista->item($i);
					break 2;
				}
			}
		}
		if ($remover!==null) {
			$remover->parentNode->removeChild($remover);
			$doc->save('xml/carro.xml');
		}
		require_once("carrito.php");
	?>