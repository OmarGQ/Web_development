<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kardex-agregar</title>
</head>
<body background="../imagenes/fon.png">
	<section>
		<div align="center">
			<h1>Agregar calificaciones</h1>
			<form  id="form1" name="form1" method="post">
				<table>
					<tr>
						<td>
							<label>Nombre del alumno</label>
						</td>
						<td>
							<label>Grado del alumno</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" id="nombre" name="nombre">
						</td>
						<td>
							<input type="number" id="grado" name="grado" style="width: 60px">
						</td>
					</tr>
					<tr>
						<td>
							<label>Materia</label>
						</td>
						<td>
							<label>Calificación</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="materia" id="materia">
						</td>
						<td>
							<input type="number" name="cal" id="cal" min="0" max="100">
						</td>
					</tr>
					<tr>
						<td>
							<label>Materia</label>
						</td>
						<td>
							<label>Calificación</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="materia2" id="materia2">
						</td>
						<td>
							<input type="number" name="cal2" id="cal2" min="0" max="100">
						</td>
					</tr>
					<tr>
						<td>
							<label>Materia</label>
						</td>
						<td>
							<label>Calificación</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="materia3" id="materia3">
						</td>
						<td>
							<input type="number" name="cal3" min="0" max="100" id="cal3">
						</td>
					</tr>
					<tr>
						<td>
							<label>Materia</label>
						</td>
						<td>
							<label>Calificación</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="materia4" id="materia4">
						</td>
						<td>
							<input type="number" name="cal4" min="0" max="100" id="cal4">
						</td>
					</tr>
					<tr>
						<td>
							<label>Materia</label>
						</td>
						<td>
							<label>Calificación</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="materia5" id="materia5">
						</td>
						<td>
							<input type="number" name="cal5" min="0" max="100" id="cal5">
						</td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td>
							<input name="Submit" type="submit" value="Submit" style="border-radius: 20px"/>
						</td>
						<td>
							<a href="../index.html">
								<input type="button" name="regresar" value="Regresar" style="border-radius: 20px">
							</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</section>
	<?php
		if (isset ($_POST['Submit'])) {
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
			if (((($cal1 !== "" && $cal2 !=="") && ($cal3 !== "" && $cal4 !=="")) && ($cal5 !=="" && $nombre !== "")) && ((($materia1 !== "" && $materia2 !=="") && ($materia3 !== "" && $materia4 !=="")) && ($materia5 !=="" && $grado !== ""))) {
				$prom = $cal1;
				$prom += $cal2;
				$prom += $cal3;
				$prom += $cal4;
				$prom += $cal5;
				$prom /= 5;
				$doc = new domDocument("1.0", "utf-8");
				$doc -> formatOutput = true;
				$doc -> load("../xml/kardex.xml");
					$raiz = $doc->getElementsByTagname('alumnos')->item(0);
						$rama = $doc -> createElement('alumno');
							$hoja = $doc -> createElement('nombre');
							$hoja -> appendChild($doc -> createTextNode($nombre));
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('grado');
							$hoja -> appendChild($doc -> createTextNode($grado));
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('materia1');
							$hoja -> appendChild($doc -> createTextNode($materia1));
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('calificacion1');
							$hoja -> setAttribute('cal1', $cal1);
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('materia2');
							$hoja -> appendChild($doc -> createTextNode($materia2));
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('calificacion2');
							$hoja -> setAttribute('cal2', $cal2);
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('materia3');
							$hoja -> appendChild($doc -> createTextNode($materia3));
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('calificacion3');
							$hoja -> setAttribute('cal3', $cal3);
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('materia4');
							$hoja -> appendChild($doc -> createTextNode($materia4));
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('calificacion4');
							$hoja -> setAttribute('cal4', $cal4);
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('materia5');
							$hoja -> appendChild($doc -> createTextNode($materia5));
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('calificacion5');
							$hoja -> setAttribute('cal5', $cal5);
						$rama -> appendChild($hoja);
							$hoja = $doc -> createElement('promedio');
							$hoja -> setAttribute('prom', $prom);
						$rama -> appendChild($hoja);
					$raiz -> appendChild($rama);
				$doc -> appendChild($raiz);
				$doc -> save("../xml/kardex.xml");
			}else{
				echo "<span style='color: red'>No se ejecuto la accion debido a que uno de los campos estaba vacio</span>";
			}
		}
	?>
</body>
</html>