<!DOCTYPE html>
<html>
<head>
	<title>Kardex-editar</title>
</head>
<body background="../imagenes/fon.png">
	<section>
		<div align="center">
			<h1>Editar</h1>
			<?php
				$nombre = $_POST['nombre'];
				$grado = $_POST['grado']; 
				$alumnos = simplexml_load_file("../xml/kardex.xml");
				foreach($alumnos as $alumno)
					{
					if ($alumno->nombre == $nombre && $alumno->grado == $grado) {
						echo '<form  id="form1" name="form1" method="post" action="modeloE.php">';
						echo '<table><tr><td>';
						echo '<label>Nombre del alumno</label></td>';
						echo '<td><label>Grado del alumno</label></td>';
						echo '</tr><tr><td><input type="text" id="nombre" name="nombre" value="'.$alumno->nombre.'"></td><td>';
						echo '<input type="text" id="grado" name="grado" value="'.$alumno->grado.'" style="width: 60px"></td></tr><tr><td><label>Materia</label>';
						echo '</td><td><label>Calificación</label></td></tr><tr><td>';
						echo '<input type="text" name="materia" id="materia" value="'.$alumno->materia1.'"></td><td>';
						echo '<input type="number" name="cal" id="cal" value="'.$alumno->calificacion1['cal1'].'" min="0" max="100"></td></tr>';
						echo '<tr><td><label>Materia</label></td><td><label>Calificación</label>';
						echo '</td></tr><tr><td><input type="text" name="materia2" id="materia2" value="'.$alumno->materia2.'"></td><td>';
						echo '<input type="number" name="cal2" id="cal2" value="'.$alumno->calificacion2['cal2'].'" min="0" max="100"></td></tr><tr>';
						echo '<td><label>Materia</label></td><td><label>Calificación</label></td></tr><tr>';
						echo '<td><input type="text" name="materia3" id="materia3" value="'.$alumno->materia3.'"></td><td>';
						echo '<input type="number" name="cal3" min="0" value="'.$alumno->calificacion3['cal3'].'" max="100" id="cal3"></td></tr><tr><td>';
						echo '<label>Materia</label></td><td><label>Calificación</label></td></tr><tr><td>';
						echo '<input type="text" name="materia4" id="materia4" value="'.$alumno->materia4.'"></td><td>';
						echo '<input type="number" name="cal4" min="0" value="'.$alumno->calificacion4['cal4'].'" max="100" id="cal4"></td></tr><tr><td><label>Materia</label></td><td>';
						echo '<label>Calificación</label></td></tr><tr><td>';
						echo '<input type="text" name="materia5" id="materia5" value="'.$alumno->materia5.'">';
						echo '</td><td><input type="number" name="cal5" value="'.$alumno->calificacion5['cal5'].'" min="0" max="100" id="cal5"></td></tr></table><br>';

						echo "<input type='hidden' name='nom' id='nom' value='".$alumno->nombre."'>";
						echo "<input type='hidden' name='gra' id='gra' value='".$alumno->grado."'>";
						echo "<table><tr><td>";
						echo '<input name="Submit" type="submit" value="Submit" style="border-radius: 20px"/></td><td>';
						echo '<a href="ver.php"><input type="button" name="regresar" value="Regresar" style="border-radius: 20px"></a></td></tr></table>';
						echo '</form>';
					}
				}
			?>
		</div>
	</section>
</body>
</html>
<table>