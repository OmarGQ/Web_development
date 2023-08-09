<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Promedios</title>
</head>
<body>
	<section>
		<div align="center">
			<h1>Todos los promedios</h1>
			<table border="5" style="border-color: black">
				<tr align="center">
					<td>Nombre</td>
					<td>Promedio</td>
					<td>Materia</td>
					<td>Calificacion</td>
					<td>Materia</td>
					<td>Calificacion</td>
					<td>Materia</td>
					<td>Calificacion</td>
				</tr>
				<?php
					$alumnos = simplexml_load_file("xml/doc.xml");
					foreach($alumnos as $alumno)
					{
						if ($alumno->promedio > 69) {
							echo "<tr style='background-color: green'>";
						}else{
							echo "<tr>";
						}
						echo "<td>". $alumno->nombre; echo "</td>";
						echo "<td>". $alumno->promedio; echo "</td>";
						echo "<td>". $alumno->materia1; echo "</td>";
						echo "<td>". $alumno->materia1['calificacion']; echo "</td>";
						echo "<td>".$alumno->materia2; echo "</td>";
						echo "<td>". $alumno->materia2['calificacion']; echo "</td>";
						echo "<td>".$alumno->materia3; echo "</td>";
						echo "<td>". $alumno->materia3['calificacion']; echo "</td>";
						echo "</tr>"; 
					}
				?>
			</table>
			<br>
			<a href="index.php">
				<input type="button" name="regresar" value="Regresar" style="border-radius: 20px">
			</a>
		</div>
	</section>
</body>
</html>