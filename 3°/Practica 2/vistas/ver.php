<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Kardex-ver</title>
</head>
<body background="../imagenes/fon.png">
	<section>
		<div align="center">
			<h1>Todos los alumnos</h1>
			<table border="5" style="border-color: black">
				<tr align="center">
					<td>Nombre</td>
					<td>Grado</td>
					<td>Promedio</td>
					<td>Materia</td>
					<td>Calificacion</td>
					<td>Materia</td>
					<td>Calificacion</td>
					<td>Materia</td>
					<td>Calificacion</td>
					<td>Materia</td>
					<td>Calificacion</td>
					<td>Materia</td>
					<td>Calificacion</td>
				</tr>
				<?php
					$alumnos = simplexml_load_file("../xml/kardex.xml");
					foreach($alumnos as $alumno)
					{
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

						echo "<form method='post' action='editar.php'>";
						echo "<input type='hidden' name='nombre' id='nombre' value='".$alumno->nombre."'>";
						echo "<input type='hidden' name='grado' id='grado' value='".$alumno->grado."'>";
						echo "<td><input name='Submit' type='submit' value='Editar'></td>";
						echo "</form>";

						echo "<form method='post' action='eliminar.php'>";
						echo "<input type='hidden' name='nombre' id='nombre' value='".$alumno->nombre."'>";
						echo "<input type='hidden' name='grado' id='grado' value='".$alumno->grado."'>";
						echo "<td><input name='Submit' type='submit' value='Eliminar'></td></td>";
						echo "</form>";
						echo "</tr>"; 
					}
				?>
			</table>
			<br>
			<a href="../index.html">
				<input type="button" name="regresar" value="Regresar" style="border-radius: 20px">
			</a>
		</div>
	</section>
</body>
</html>