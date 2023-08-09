<!DOCTYPE>
<head>
	<script type="text/javascript" src="funciones.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="formato.css">
<title>Imágenes dinámicas de una carpeta en php</title>
</head>
<body>
	<content>
		<table width="100%">
			<th align="center">
				<a name="com"></a>
				<h2>Computadoras</h2>
			</th>
			<tr>
				<td>
					<table width="100%" cellspacing="10">
						<tr>
							<?php
								$producto = array();
								$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
								$dbh->query("SET NAMES 'utf8'");
								$sql="select id, nombre, precio from productos where clase = 'computadora'";
								foreach ($dbh->query($sql) as $res)
								{
									$producto[]=$res;
								}
								$dbh=null;
								$c=0;
								for($i=0;$i<12;$i++)
								{
									if ($c==4) {
										$c=0;
							?>
										</tr>
										<tr>
									<?php
									}
									?>
										<td height="250" width="25%">
											<?php
											echo '<img src="imagen/productos/c'.$i.'.jpg" class="imgPro"/>';
											echo '<br>';
											echo $producto[$i]["nombre"];
											echo '<br>';
											echo '<span style="color: blue">'.$producto[$i]["precio"].'$</span>';
											echo '<form name="formc'.$i.'" id="formc'.$i.'" method="post" action="controlador.php">';
											echo '<input type="hidden" name="Id" id="Id" value="c'.$i.'">';
											echo '<input type="hidden" name="price" id="price" value="'.$producto[$i]["precio"].'">';
											echo '<input type="hidden" name="name" id="name" value="'.$producto[$i]["nombre"].'">';
											echo '<input type="number" min="1" max="99" name="cant" id="cant" value="1" style="width: 50px">';
											echo '<input name="Submit" type="submit" value="agregar" /></form>';
											?>										
										</td>
							<?php
									$c++;
								}
							?>
						</tr>	
					</table>
				</td>
			</tr>
		</table>
		<table width="100%">
			<th align="center">
				<a name="tel"></a>
				<h2>Telefonos</h2>
			</th>
			<tr>
				<td>
					<table width="100%" cellspacing="10">
						<tr>
							<?php
								$producto = array();
								$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
								$dbh->query("SET NAMES 'utf8'");
								$sql="select nombre, precio from productos where clase = 'teléfono'";
								foreach ($dbh->query($sql) as $res)
								{
									$producto[]=$res;
								}
								$dbh=null;
								$c=0;
								for($i=0;$i<10;$i++)
								{
									if ($c==4) {
										$c=0;
							?>
										</tr>
										<tr>
									<?php
									}
									?>
										<td height="250" width="25%">
											<?php
											echo '<img src="imagen/productos/t'.$i.'.jpg" class="imgPro"/>';
											echo '<br>';
											echo $producto[$i]["nombre"];
											echo '<br>';
											echo '<span style="color: blue">'.$producto[$i]["precio"].'$</span>';
											echo '<form name="formt'.$i.'" id="formt'.$i.'" method="post" action="controlador.php">';
											echo '<input type="hidden" name="Id" id="Id" value="t'.$i.'">';
											echo '<input type="hidden" name="price" id="price" value="'.$producto[$i]["precio"].'">';
											echo '<input type="hidden" name="name" id="name" value="'.$producto[$i]["nombre"].'">';
											echo '<input type="number" min="1" max="99" name="cant" id="cant" value="1" style="width: 50px">';
											echo '<input name="Submit" type="submit" value="agregar" /></form>';
											?>										
										</td>
							<?php
									$c++;
								}
							?>
						</tr>	
					</table>
				</td>
			</tr>
		</table>
		<table width="100%">
			<th align="center">
				<a name="tv"></a>
				<h2>Televiciones</h2>
			</th>
			<tr>
				<td>
					<table width="100%" cellspacing="10">
						<tr>
							<?php
								$producto = array();
								$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
								$dbh->query("SET NAMES 'utf8'");
								$sql="select nombre, precio from productos where clase = 'televicion'";
								foreach ($dbh->query($sql) as $res)
								{
									$producto[]=$res;
								}
								$dbh=null;
								$c=0;
								for($i=0;$i<13;$i++)
								{
									if ($c==4) {
										$c=0;
							?>
										</tr>
										<tr>
									<?php
									}
									?>
										<td height="250" width="25%">
											<?php
											echo '<img src="imagen/productos/s'.$i.'.jpg" class="imgPro"/>';
											echo '<br>';
											echo $producto[$i]["nombre"];
											echo '<br>';
											echo '<span style="color: blue">'.$producto[$i]["precio"].'$</span>';
											echo '<form name="forms'.$i.'" id="forms'.$i.'" method="post" action="controlador.php">';
											echo '<input type="hidden" name="Id" id="Id" value="s'.$i.'">';
											echo '<input type="hidden" name="price" id="price" value="'.$producto[$i]["precio"].'">';
											echo '<input type="hidden" name="name" id="name" value="'.$producto[$i]["nombre"].'">';
											echo '<input type="number" min="1" max="99" name="cant" id="cant" value="1" style="width: 50px">';
											echo '<input name="Submit" type="submit" value="agregar" /></form>';
											?>										
										</td>
							<?php
									$c++;
								}
							?>
						</tr>	
					</table>
				</td>
			</tr>
		</table>
		<table width="100%">
			<th align="center">
				<a name="oto"></a>
				<h2>Sonido</h2>
			</th>
			<tr>
				<td>
					<table width="100%" cellspacing="10">
						<tr>
							<?php
								$producto = array();
								$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
								$dbh->query("SET NAMES 'utf8'");
								$sql="select nombre, precio from productos where clase = 'bocinas'";
								foreach ($dbh->query($sql) as $res)
								{
									$producto[]=$res;
								}
								$dbh=null;
								$c=0;
								for($i=0;$i<7;$i++)
								{
									if ($c==4) {
										$c=0;
							?>
										</tr>
										<tr>
									<?php
									}
									?>
										<td height="250" width="25%">
											<?php
											echo '<img src="imagen/productos/m'.$i.'.jpg" class="imgPro"/>';
											echo '<br>';
											echo $producto[$i]["nombre"];
											echo '<br>';
											echo '<span style="color: blue">'.$producto[$i]["precio"].'$</span>';
											echo '<form name="formm'.$i.'" id="formm'.$i.'" method="post" action="controlador.php">';
											echo '<input type="hidden" name="Id" id="Id" value="m'.$i.'">';
											echo '<input type="hidden" name="price" id="price" value="'.$producto[$i]["precio"].'">';
											echo '<input type="hidden" name="name" id="name" value="'.$producto[$i]["nombre"].'">';
											echo '<input type="number" min="1" max="99" name="cant" id="cant" value="1" style="width: 50px">';
											echo '<input name="Submit" type="submit" value="agregar" /></form>';
											?>										
										</td>
							<?php
									$c++;
								}
							?>
						</tr>	
					</table>
				</td>
			</tr>
		</table>
		<table width="100%">
			<th align="center">
				<a name="game"></a>
				<h2>Videojuegos</h2>
			</th>
			<tr>
				<td>
					<table width="100%" cellspacing="10">
						<tr>
							<?php
								$producto = array();
								$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
								$dbh->query("SET NAMES 'utf8'");
								$sql="select nombre, precio from productos where clase = 'videojuegos'";
								foreach ($dbh->query($sql) as $res)
								{
									$producto[]=$res;
								}
								$dbh=null;
								$c=0;
								for($i=0;$i<8;$i++)
								{
									if ($c==4) {
										$c=0;
							?>
										</tr>
										<tr>
									<?php
									}
									?>
										<td height="250" width="25%">
											<?php
											echo '<img src="imagen/productos/v'.$i.'.jpg" class="imgPro"/>';
											echo '<br>';
											echo $producto[$i]["nombre"];
											echo '<br>';
											echo '<span style="color: blue">'.$producto[$i]["precio"].'$</span>';
											echo '<form name="formv'.$i.'" id="formv'.$i.'" method="post" action="controlador.php">';
											echo '<input type="hidden" name="Id" id="Id" value="v'.$i.'">';
											echo '<input type="hidden" name="price" id="price" value="'.$producto[$i]["precio"].'">';
											echo '<input type="hidden" name="name" id="name" value="'.$producto[$i]["nombre"].'">';
											echo '<input type="number" min="1" max="99" name="cant" id="cant" value="1" style="width: 50px">';
											echo '<input name="Submit" type="submit" value="agregar" /></form>';
											?>										
										</td>
							<?php
									$c++;
								}
							?>
						</tr>	
					</table>
				</td>
			</tr>
		</table>
	</content>
</body>
</html>