<?php
	$nombre = $_POST['nombre'];
			$grado = $_POST['grado'];
			$materia1 = $_POST['materia'];
			$materia2 = $_POST['materia2'];
			$materia3 = $_POST['materia3'];
			$materia4 = $_POST['materia4'];
			$materia5 = $_POST['materia5'];
			$cal1 = $_POST['cal'];
			$cal2 = $_POST['cal2'];
			$cal3 = $_POST['cal3'];
			$cal4 = $_POST['cal4'];
			$cal5 = $_POST['cal5'];
			$nom = $_POST['nom'];
			$gra = $_POST['gra'];
			if (((($cal1 !== "" && $cal2 !=="") && ($cal3 !== "" && $cal4 !=="")) && ($cal5 !=="" && $nombre !== "")) && ((($materia1 !== "" && $materia2 !=="") && ($materia3 !== "" && $materia4 !=="")) && ($materia5 !=="" && $grado !== ""))) {
				$prom = $cal1;
				$prom += $cal2;
				$prom += $cal3;
				$prom += $cal4;
				$prom += $cal5;
				$prom /= 5;
				$doc = new DOMDocument();
				$doc->load('../xml/kardex.xml');
				$nodoslista = $doc->getElementsByTagName('alumno');
				$edicion=null;
				for ($i=0; $i < $nodoslista->length; $i++) { 
					$lista = $nodoslista->item($i)->childNodes;
					for ($j=0; $j < $lista->length; $j++) { 
						if (((string) $lista->item($j)->nodeName)=='nombre' && ((string) $lista->item($j)->nodeValue)==$nom) {
							$edicion =1;
							$lista->item(0)->nodeValue=$nombre;
							$lista->item(1)->nodeValue=$grado;
							$lista->item(2)->nodeValue=$materia1;
							$lista->item(3)->setAttribute('cal1', $cal1);
							$lista->item(4)->nodeValue=$materia2;
							$lista->item(5)->setAttribute('cal2', $cal2);
							$lista->item(6)->nodeValue=$materia3;
							$lista->item(7)->setAttribute('cal3', $cal3);
							$lista->item(8)->nodeValue=$materia4;
							$lista->item(9)->setAttribute('cal4', $cal4);
							$lista->item(10)->nodeValue=$materia5;
							$lista->item(11)->setAttribute('cal5', $cal5);
							$lista->item(12)->setAttribute('prom', $prom);
							break 2;
						}
					}
				}
				if ($edicion!==null) {
					$doc->save('../xml/kardex.xml');
				}
			}else{
				echo "<span style='color: red'>No se ejecuto la accion debido a que uno de los campos estaba vacio</span>";
			}
			
			$edicion = null;
			require_once("ver.php");
?>