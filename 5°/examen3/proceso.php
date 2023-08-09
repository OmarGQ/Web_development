<?php
	$cant = $_GET['cant'];
	$id = $_GET['Id'];
	$productos = simplexml_load_file("productos.xml");
		foreach($productos as $producto)
		{
			if ($producto->id == $id) {
				$pro = $producto->nombre;
				$pre = $producto->precio['price'];
			}
		}
		$doc = new domDocument("1.0", "utf-8");
		$doc -> formatOutput = true;
		$doc -> load("table.xml");
			$raiz = $doc->getElementsByTagname('carro')->item(0);
				$rama = $doc -> createElement('producto');
					$hoja = $doc -> createElement('nombre');
					$hoja -> appendChild($doc -> createTextNode($pro));
				$rama -> appendChild($hoja);
					$hoja = $doc -> createElement('precio');
					$hoja -> setAttribute('price', $pre);
				$rama -> appendChild($hoja);
					$hoja = $doc -> createElement('cantidad');
					$hoja -> setAttribute('cant', $cant);
				$rama -> appendChild($hoja);
			$raiz -> appendChild($rama);
		$doc -> appendChild($raiz);
		$doc -> save("table.xml");									
	header('Location: index.php');
?>