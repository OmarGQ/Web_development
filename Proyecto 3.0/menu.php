<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formato.css">
	<script type="text/javascript" src="funciones.js"></script>
	<title></title>
</head>
<body>
	<header>
		<table width="100%" style="background-color: blue">
			<tr>
				<td height="100" width="15%" align="center">
					<figure style="margin: 0">
						<a href="home.php" target="inferior">
							<img src="imagen/imp.png" width="130em" height="130em">
						</a>
					</figure>
				</td>
				<td>
					<table width="100%">
						<tr>
							<td width="60%" height="50" align="center">
								<table width="90%">
									<tr>
										<td width="10%"></td>
										<td>
											<span style="font-size: 27px">Best Shopping</span>
										</td>
										<td align="right">
											<a href="carrito.php" target="inferior">
												<button style="background-color: green; color: white; width: 50%; height: 1.5em; border-radius: 20px; font-size: 1em">Carrito</button>
											</a>
										</td>
									</tr>
								</table>
							</td>
							<td width="40%" align="right">
								<?php
									session_start();	
									if (!isset($_SESSION['estado'])){
										$_SESSION['estado'] = "";
										$_SESSION['usuario'] = "";
									}	
									if($_SESSION['estado'] == "Autenticado"){
										echo '<span style="color: white; font-size: 1.5em">Bienbenido: '.$_SESSION['usuario'].'</span><br>
											<a href="cerrar_sesion.php">
											<button style = "width: 9em; height: 1.8em; border-radius: 30px">Cerrar Sesion</button>
											</a>';
									}else{
										echo "
											<form id=\"form1\" name=\"form1\" method=\"post\" action=\"sessionStart.php\">									
												<input type=\"text\" name=\"usuario\" id=\"usuario\" placeholder=\"Correo\" style=\"width: 35%\">
												<input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Contraseña\" style=\"width: 35%\">
												<input type=\"Submit\" name=\"Login\" value=\"Login\" style=\"width: 18%; height: 1.5em; border-radius: 30px\">
											</form>
											<a href=\"registro.html\" target=\"_blank\" onclick=\"window.open(this.href, this.target, 'width=400,height=400'); return false;\">					
													<input type=\"button\" name=\"Registrarse\" value=\"Registrarse\"style=\"width: 18%; height: 1.5em; border-radius: 30px\">
											</a>";
									}
								?>
							</td>
						</tr>
						<tr>
							<td height="20%" align="center">
								<nav>
									<table width="90%" style="background-color: #fffcec; border-radius: 40px; border-collapse: collapse" border="0">
										<tr>
											<td width="33%" align="center" id="c1" onmouseover="color(1)" onmouseout="colorout(1)" style="border-bottom-left-radius: 40px; border-top-left-radius: 40px">
												<a href="home.php" target="inferior">
													<button style="background-color: transparent; border-color: transparent; height: 3.5em; width: 8em; font-size: 1em">Home</button>
												</a>
											</td>
											<td width="33%" align="center" id="c2" onmouseover="color(2)" onmouseout="colorout(2)">
												<a href="producto.html" target="inferior">
													<button style="background-color: transparent; border-color: transparent; height: 3.5em; width: 8em; font-size: 1em">Productos</button>
												</a>
											</td>
											<td width="33%" align="center" id="c3" onmouseover="color(3)" onmouseout="colorout(3)" style="border-bottom-right-radius: 40px; border-top-right-radius: 40px">
												<a href="tiendas.html" target="inferior">
													<button style="background-color: transparent; border-color: transparent; height: 3.5em; width: 8em; font-size: 1em">Tiendas</button>
												</a>
											</td>
										</tr>
									</table>
								</nav>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</header>
</body>
</html>