<?php
	$cant = $_POST['cant'];
	$id = $_POST['Id'];
	$price = $_POST['price'];
	$name = $_POST['name'];
	session_start();	
	if($_SESSION['estado'] == "Autenticado"){
		$doc = new domDocument("1.0", "utf-8");
		$doc -> formatOutput = true;
		$doc -> load("xml/carro.xml");
			$raiz = $doc->getElementsByTagname('carro')->item(0);
				$rama = $doc -> createElement('cliente');
					$hoja = $doc -> createElement('user');
					$hoja -> appendChild($doc -> createTextNode($_SESSION['usuario']));
				$rama -> appendChild($hoja);
					$hoja = $doc -> createElement('id');
					$hoja -> appendChild($doc -> createTextNode($id));
				$rama -> appendChild($hoja);
					$hoja = $doc -> createElement('cantidad');
					$hoja -> setAttribute('cant', $cant);
				$rama -> appendChild($hoja);
					$hoja = $doc -> createElement('precio');
					$hoja -> setAttribute('price', $price);
				$rama -> appendChild($hoja);
					$hoja = $doc -> createElement('nombre');
					$hoja -> appendChild($doc -> createTextNode($name));
				$rama -> appendChild($hoja);
			$raiz -> appendChild($rama);
		$doc -> appendChild($raiz);
		$doc -> save("xml/carro.xml");									
	}else{
		echo '<script language="javascript">';
		echo 'alert("Inicie secion para agregar productos")';
		echo '</script>';
	}
	require_once("productos.php");
?>