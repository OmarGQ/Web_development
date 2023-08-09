<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formato.css">
	<title></title>
</head>
<body>
	<section>
		<table width="100%">
			<tr>
				<td align="center">
					<p style="width: 30%; font-size: 2em"><b>Bienbenido a Best Dragon</b></p>
				</td>
			</tr>
			<tr>
				<td align="center">
					<form method="post" action="model/modeloBuscar.php">
						<input type="text" name="busqueda" id="busqueda" style="width: 30%; height: 2.5em; border-radius: 100px">
						<input type="submit" name="buscar" value="Buscar" style="background-color: blue; color: white; width: 5em; height: 2.5em; border-radius: 15px">
					</form>
				</td>
			</tr>
			<tr>
				<nav>
					<table width="90%" align="center">
						<?php
						$S=true;
							session_start();
							if (!isset($_SESSION['estado'])){
								$_SESSION['estado'] = "";
								$_SESSION['usuario'] = "";
							}
							if($_SESSION['estado'] == "Autenticado"){/////////////
								$preferencia = array();
								$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
								$dbh->query("SET NAMES 'utf8'");	
								$sql="select preferencia from usuarios where nombre = '".$_SESSION['usuario']."'";
								foreach ($dbh->query($sql) as $res)
									{
										$preferencia[]=$res;
									}
								if($preferencia[0]["preferencia"] != "") {
									$S=false;
								    $producto = array();	
									$sql="select id, nombre, precio, clase from productos where nombre LIKE '%".$preferencia[0]["preferencia"]."%'";
									foreach ($dbh->query($sql) as $res)
									{
										$producto[]=$res;
									}
									$dbh=null;
									echo '<tr>';
									$con = count($producto);
									for ($i=0; $i < 4; $i++) {
										$r = rand(0, $con-1);
										if ($producto[$r]["clase"]== "computadora") {
											$e = "c";
										}
										else if ($producto[$r]["clase"]== "teléfono") {
											$e = "t";
										}
										else if ($producto[$r]["clase"]== "televicion") {
											$e = "s";
										}
										else if ($producto[$r]["clase"]== "bocinas") {
											$e = "m";
										}
										else if ($producto[$r]["clase"]== "videojuegos") {
											$e = "v";
										}
										echo '<td height="250" width="25%">';
										echo '<img src="imagen/productos/'.$producto[$r]['id'].'.jpg" class="hom"/>';
										echo '<br>';
										echo $producto[$r]['nombre'];
										echo '<br>';
										echo '<span style="color: blue">'.$producto[$r]["precio"].'$</span>';
										echo '<form name="formc'.$r.'" id="formc'.$r.'" method="post" action="controlador.php">';
										echo '<input type="hidden" name="Id" id="Id" value="'.$e.''.$r.'">';
										echo '<input type="hidden" name="price" id="price" value="'.$producto[$r]["precio"].'">';
										echo '<input type="hidden" name="name" id="name" value="'.$producto[$r]["nombre"].'">';
										echo '<input type="number" min="1" max="99" name="cant" id="cant" value="1" style="width: 50px">';
										echo '<input name="Submit" type="submit" value="agregar" /></form></td>';
									}
									echo '</tr>';
								}else{
									$S=true;
								}
							}
							if($S){
								echo '<tr align="center">
										<td width="20%">
											<a href="producto.html#game">
												<figure style="margin: 0">
													<img src="imagen\productos\c4.jpg" class="hom">
												</figure>
											</a>
										</td>';
									echo '<td width="20%">
											<a href="producto.html#game">
												<figure style="margin: 0">
													<img src="imagen\productos\t6.jpg" class="hom">
												</figure>
											</a>
										</td>';
									echo '<td width="20%">
											<a href="producto.html#game">
												<figure style="margin: 0">
													<img src="imagen\productos\s5.jpg" class="hom">
												</figure>
											</a>
										</td>';
									echo '<td width="20%">
											<a href="producto.html#game">
												<figure style="margin: 0">
													<img src="imagen\productos\m6.jpg" class="hom">
												</figure>
											</a>
										</td>';
									echo '<td width="20%">
											<a href="producto.html#game">
												<figure style="margin: 0">
													<img src="imagen\productos\v4.jpg" class="hom">
												</figure>
											</a>
										</td>
									</tr>';
								echo '<tr align="center">
										<td><p>Computadoras</p></td>
										<td><p>Telefonos</p></td>
										<td><p>Televiciones</p></td>
										<td><p>Sonido</p></td>
										<td><p>Videojuegos</p></td>
									</tr>';
							}
						?>
					</table>
				</nav>
			</tr>
		</table>
	</section>
</body>
</html>