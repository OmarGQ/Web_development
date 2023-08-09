<?php
	$tot = $_POST['tot'];
	$est = $_POST['estado'];
	$us = $_POST['us'];
		if($est == "Autenticado"){
			
			require_once("pdf.php");

			$date = date("Y-m-j H:i:s");
			$doc = new domDocument("1.0", "utf-8");
			$doc -> formatOutput = true;
			$doc -> load("xml/pedidos.xml");
				$raiz = $doc->getElementsByTagname('pedidos')->item(0);
					$rama = $doc -> createElement('paquetes');
						$hoja = $doc -> createElement('user');
						$hoja -> appendChild($doc -> createTextNode($us));
					$rama -> appendChild($hoja);
						$hoja = $doc -> createElement('date');
						$hoja -> appendChild($doc -> createTextNode($date));
					$rama -> appendChild($hoja);
						$hoja = $doc -> createElement('price');
						$hoja -> setAttribute('cant', $tot);
					$rama -> appendChild($hoja);
						$hoja = $doc -> createElement('estado');
						$hoja -> appendChild($doc -> createTextNode("Pedido"));
					$rama -> appendChild($hoja);
				$raiz -> appendChild($rama);
			$doc -> appendChild($raiz);
			$doc -> save("xml/pedidos.xml");	

			$doc = new DOMDocument();
			$doc->load('xml/carro.xml');
			$nodoslista = $doc->getElementsByTagName('cliente');
			$remover=null;
			for ($i=0; $i < $nodoslista->length; $i++) { 
				$lista = $nodoslista->item($i)->childNodes;
				for ($j=0; $j < $lista->length; $j++) { 
					if (((string) $lista->item($j)->nodeName)=='user' && ((string) $lista->item($j)->nodeValue)==$us) {
						$remover = $nodoslista->item($i);
						$remover->parentNode->removeChild($remover);
						$remover=null;
						$i--;
					}
				}
			}
			$doc->save('xml/carro.xml');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Inicie secion para hacer pedido")';
			echo '</script>';
		}
		
?>