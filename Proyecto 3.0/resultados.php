<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../formato.css">
	<title></title>
</head>
<body>
	<section>
		<div align="center">
			<table width="100%">
				<tr>	
					<?php
					echo "<td colspan='4' align='center'><h1>Resultados de ".$valor."</h1></td></tr><tr>";
						$c = 0;
						$cont = sizeof($producto);
						for ($i=0; $i < $cont; $i++) { 
							if ($c == 4) {
								$c = 0;
								echo "</tr><tr>";
							}
							echo "<td height='250' width='25%'>";
							echo '<img src="../imagen/productos/'.$producto[$i]["id"].'.jpg" width="200" height="200"/>';
							echo '<br>';
							echo $producto[$i]["nombre"];
							echo '<br>';
							echo '<span style="color: blue">'.$producto[$i]["precio"].'$</span>';
							echo '<form name="formc'.$i.'" id="formc'.$i.'" method="post" action="controlador.php">';
							echo '<input type="hidden" name="Id" id="Id" value="c'.$i.'">';
							echo '<input type="hidden" name="price" id="price" value="'.$producto[$i]["precio"].'">';
							echo '<input type="hidden" name="name" id="name" value="'.$producto[$i]["nombre"].'">';
							echo '<input type="number" min="1" max="99" name="cant" id="cant" value="1" style="width: 50px">';
							echo '<input name="Submit" type="submit" value="agregar" /></form></td>';
							$c ++;
						}
					?>
				</tr>
			</table>
		</div>
	</section>
</body>
</html>