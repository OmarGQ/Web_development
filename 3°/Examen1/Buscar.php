<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busqueda</title>
</head>
<body>
	<section>
		<table>
			<tr>
				<td>
					<form id="form1" name="form1" method="post">
						<table>
							<tr>
								<td>
									<label>Buscar</label>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<td>
											<label>Por:</label>
										</td>
										<td>
											<input type="radio" name="tipo" value="nombre">Nombre
											<br>
											<input type="radio" name="tipo" value="materia">Materia
										</td>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="bus" id="bus">
								</td>
							</tr>
							<tr>
								<td align="center">
									<input name="Submit" type="submit" value="Submit"/>
								</td>
							</tr>
						</table>
					</form>
					<?php
					if (isset ($_POST['Submit'])) {
						$tipo = $_POST['tipo'];
						$dato = $_POST['bus'];
						if ($tipo == "nombre" && $dato!=""){
							echo "<table><tr><td>Nombre</td><td>Materia1</td><td>Materia2</td><td>Materia3</td><td>Promedio</td></tr>";
							$usuarios = simplexml_load_file("xml/doc.xml");
							foreach($usuarios as $alumno)
							{
								if ($alumno->nombre == $dato) {
									echo "<tr><td>". $alumno->nombre; echo "</td>";
									echo "<td>". $alumno->materia1; echo "</td>";
									echo "<td>".$alumno->materia2; echo "</td>";
									echo "<td>".$alumno->materia3; echo "</td>";
									echo "<td>".$alumno->promedio; echo "</td>";
									echo "</tr>";
								}
							}
							echo "</table>";
						}elseif ($tipo == "materia") {
							echo "<table><tr><td>Materia</td><td>Calificaciones</td></tr>";
							echo "</table>";
							$usuarios = simplexml_load_file("xml/doc.xml");
							foreach($usuarios as $alumno)
							{
								if ($alumno->materia1 == $dato) {
									echo "<tr>";
									echo "<td>". $alumno->materia1; echo "</td>";
									echo "<td>".$alumno->materia1['calificacion']; echo "</td>";
									echo "</tr>";
								}
								if ($alumno->materia2 == $dato) {
									echo "<tr>";
									echo "<td>". $alumno->materia2; echo "</td>";
									echo "<td>".$alumno->materia2['calificacion']; echo "</td>";
									echo "</tr>";
								}
								if ($alumno->materia3 == $dato) {
									echo "<tr>";
									echo "<td>". $alumno->materia3; echo "</td>";
									echo "<td>".$alumno->materia3['calificacion']; echo "</td>";
									echo "</tr>";
								}
							}
						}
					}
					?>
				</td>
			</tr>
			<tr>
				<td>
						<a href="index.php">
							<input type="button" name="regresar" value="Regresar" style="border-radius: 20px; background-color: lightblue">
						</a>
					</td>
					<td>
						<a href="../index.html">
							<input type="button" name="regresar" value="Ver Promedios" style="border-radius: 20px; background-color: lightblue">
						</a>
					</td>
			</tr>
		</table>
	</section>
</body>
</html>