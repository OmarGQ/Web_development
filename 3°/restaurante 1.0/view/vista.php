<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body background="../image/fon.jpg">
	<div align="center">
		<h1>Platillos disponibles</h1>
		<table width="100%">
			<tr>
				<td width="33%">
					<figure>
						<img src="../image/1.png" width="300" height="300">
					</figure>
				</td>
				<td width="250" height="250" align="center" valign="top">
					<table border="5" style="border-color: white">
						<tr>
							<td><strong>Nombre platillo</strong></td>
							<td><strong>Precio platillo</strong></td>
						</tr>
						<?php
							for($i=0;$i<count($pd);$i++)
							{
								?>
									<tr>
										<td><?php echo $pd[$i]["nombre"]; ?></td>
										<td><?php echo $pd[$i]["precio"]; ?> USD.</td>
									</tr>
								<?php
							}
						?>
					</table>
				</td>
				<td width="300" height="300">
					<figure>
						<img src="../image/2.png" width="250" height="250">
					</figure>
				</td>
			</tr>
			
		</table>
	</div>
</body>
</html>