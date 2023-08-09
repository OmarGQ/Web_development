<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kardex-buscar</title>
</head>
<body background="../imagenes/fon.png">
	<section>
		<div align="center">
			<h1>Búsqueda</h1>
			<form id="form2" name="form2" method="post">
				<label>Nombre del alumno</label>
				<input type="text" name="nom" id="nom">
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
			<br>
			<br>
			<?php
				if (isset ($_POST['Submit'])) {
					$nombre = $_POST['nom'];
					if ($nombre == ""){
						echo "<span style='color: red'>El campo esta vacio</span>";
					}else{
						$alumnos = simplexml_load_file("../xml/kardex.xml");
						echo "<h1>Resultados</h1>";
						echo "<table border='5' style='border-color: black'>";
						echo "<tr align='center'><td>Nombre</td><td>Grado</td><td>Promedio</td><td>Materia</td><td>Calificacion</td><td>Materia</td><td>Calificacion</td>";
						echo "<td>Materia</td><td>Calificacion</td><td>Materia</td><td>Calificacion</td><td>Materia</td><td>Calificacion</td></tr>";
							foreach($alumnos as $alumno)
							{
								if ($alumno->nombre == $nombre) {
									echo "<tr><td>". $alumno->nombre; echo "</td>";
									echo "<td>". $alumno->grado; echo "</td>";
									echo "<td>". $alumno->promedio['prom']; echo "</td>";
									echo "<td>". $alumno->materia1; echo "</td>";
									echo "<td>". $alumno->calificacion1['cal1']; echo "</td>";
									echo "<td>".$alumno->materia2; echo "</td>";
									echo "<td>". $alumno->calificacion2['cal2']; echo "</td>";
									echo "<td>".$alumno->materia3; echo "</td>";
									echo "<td>". $alumno->calificacion3['cal3']; echo "</td>";
									echo "<td>".$alumno->materia4; echo "</td>";
									echo "<td>". $alumno->calificacion4['cal4']; echo "</td>";
									echo "<td>".$alumno->materia5; echo "</td>";
									echo "<td>". $alumno->calificacion5['cal5']; echo "</td>";
									echo "</tr>";
								}
							}
						echo "</table>"; 
					}
				}
			?>
		</div>
	</section>
</body>
</html>