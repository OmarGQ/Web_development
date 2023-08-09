<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Promedios</title>
</head>
<body>
	<section>
		<div align="center">
			<h1>Omar Ildefonso Godinez Quiñones 15300515</h1>
			<h1>Promedios</h1>
			<form id="form1" name="form1" method="post">
				<table>
					<tr>
						<td>
							<label>Nombre:</label>
							<input type="text" name="nombre" id="nombre">
						</td>
					</tr>
					<tr>
						<table>
							<tr>
								<td>
									<label>Materia 1</label>
								</td>
								<td>
									<select name="M1" id="M1">
									   <option value="español">español</option> 
									   <option value="matematicas">matematicas</option>
									   <option value="fisica">fisica</option>
									</select>
								</td>
								<td>
									<label>Calificacion:</label>
								</td>
								<td>
									<input type="number" id="c1" name="c1">
								</td>
							</tr>
							<tr>
								<td>
									<label>Materia 2</label>
								</td>
								<td>
									<select name="M2" id="M2">
									   <option value="español">español</option> 
									   <option value="matematicas">matematicas</option>
									   <option value="fisica">fisica</option>
									</select>
								</td>
								<td>
									<label>Calificacion:</label>
								</td>
								<td>
									<input type="number" id="c2" name="c2">
								</td>
							</tr>
							<tr>
								<td>
									<label>Materia 3</label>
								</td>
								<td>
									<select name="M3" id="M3">
									   <option value="español">español</option> 
									   <option value="matematicas">matematicas</option>
									   <option value="fisica">fisica</option>
									</select>
								</td>
								<td>
									<label>Calificacion:</label>
								</td>
								<td>
									<input type="number" id="c3" name="c3">
								</td>
							</tr>
						</table>
					</tr>
					<tr>
						<input name="Submit" type="submit" value="Submit" style="border-radius: 20px"/>
					</tr>
				</table>
			</form>
			<?php
				if (isset ($_POST['Submit'])) {
					$nombre = $_POST['nombre'];
					$materia1 = $_POST['M1'];
					$materia2 = $_POST['M2'];
					$materia3 = $_POST['M3'];
					$cal1 = $_POST['c1'];
					$cal2 = $_POST['c2'];
					$cal3 = $_POST['c3'];
					if (((($cal1 !== "" && $cal2 !=="") && ($cal3 !== "")) && ($materia3 !=="" && $nombre !== "")) && ($materia1 !== "" && $materia2 !=="")) {
						$prom = $cal1;
						$prom += $cal2;
						$prom += $cal3;
						$prom /= 3;
						$doc = new domDocument("1.0", "utf-8");
						$doc -> formatOutput = true;
						$doc -> load("xml/doc.xml");
							$raiz = $doc->getElementsByTagname('Usuarios')->item(0);
								$rama = $doc -> createElement('usuario');
									$hoja = $doc -> createElement('nombre');
									$hoja -> appendChild($doc -> createTextNode($nombre));
								$rama -> appendChild($hoja);
									$hoja = $doc -> createElement('materia1');
									$hoja -> setAttribute('calificacion', $cal1);
									$hoja -> appendChild($doc -> createTextNode($materia1));
								$rama -> appendChild($hoja);
									$hoja = $doc -> createElement('materia2');
									$hoja -> setAttribute('calificacion', $cal2);
									$hoja -> appendChild($doc -> createTextNode($materia2));
								$rama -> appendChild($hoja);
									$hoja = $doc -> createElement('materia3');
									$hoja -> setAttribute('calificacion', $cal3);
									$hoja -> appendChild($doc -> createTextNode($materia3));
								$rama -> appendChild($hoja);
									$hoja = $doc -> createElement('promedio');
									$hoja -> appendChild($doc -> createTextNode($prom));
								$rama -> appendChild($hoja);
							$raiz -> appendChild($rama);
						$doc -> appendChild($raiz);
						$doc -> save("xml/doc.xml");
					}else{
						echo "<span style='color: red'>No se ejecuto la accion debido a que uno de los campos estaba vacio</span>";
					}
				}
			?>
			<table>
				<tr>
					<td>
						<a href="Buscar.php">
							<input type="button" name="regresar" value="Buscar" style="border-radius: 20px; background-color: lightblue">
						</a>
					</td>
					<td>
						<a href="Promedios.php">
							<input type="button" name="regresar" value="Ver Promedios" style="border-radius: 20px; background-color: lightblue">
						</a>
					</td>
				</tr>
			</table>
		</div>
	</section>
</body>
</html>