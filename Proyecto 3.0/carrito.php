<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formato.css">
	<title>carrito</title>
</head>
<body>
	<section>
		<div align="center">
			<table width="95%">
				<tr>
					<td width="85%">
						<table width="97%" border="5" style="border-color: black">
							<tr style="border-color: transparent">
								<td></td>
								<td style="font-size: 1.5em">Nombre del producto</td>
								<td style="font-size: 1.5em">Cantidad</td>
								<td style="font-size: 1.5em">Precio individual</td>
								<td style="font-size: 1.5em">Total</td>
							</tr>
							<?php
								session_start();	
								if($_SESSION['estado'] != "Autenticado"){
									echo '<div align="center"><span style="color: red; font-size: 3em">No ha iniciado sesion</span></div>';
								}
								$tot = 0;
								$carro = simplexml_load_file("xml/carro.xml");
								foreach($carro as $cliente)
								{
									if($cliente->user == $_SESSION['usuario']){
										$totp = $cliente->precio['price'] * $cliente->cantidad['cant'];
										$tot += $totp;
										echo "<tr>";
										echo "<td align='center'>";
										echo "<img src='imagen/productos/".$cliente->id.".jpg' width='75' height='75'></td>";
										echo "<td align='center' style='font-size: 1.5em'>".$cliente->nombre;
										echo "<br>";

										echo "<form method='post' action='eliminar.php'>";
										echo '<input type="hidden" name="id" id="id" value="'.$cliente->id.'">';
										echo "<input style='background-color: transparent; border-color: transparent; height: 50px; width: 160px; color: blue' name='Submit' type='submit' value='Eliminar'>";
										echo "</form>";

										echo "<td align='center' style='font-size: 1.5em'>".$cliente->cantidad['cant']."</td>";
										echo "<td align='center' style='font-size: 1.5em'>".$cliente->precio['price']."$</td>";
										echo "<td align='center' style='font-size: 1.5em'>".$totp."$</td>";
										echo "</tr>"; 
									}
								}
							?>
						</table>
						<table width="80%" border="5" style="border-color: black">
							<br>
							<br>
							<tr style="border-color: transparent">
								<td style="font-size: 1.5em">Fecha</td>
								<td style="font-size: 1.5em">Cantidad</td>
								<td style="font-size: 1.5em">Estado</td>
							</tr>
							<?php
								$pedidos = simplexml_load_file("xml/pedidos.xml");
								foreach($pedidos as $paquete)
								{
									if($paquete->user == $_SESSION['usuario']){
										if($paquete->estado == "Entregado"){
											echo '<tr style="background-color: #8CF5A4">';
										}
										else if($paquete->estado == "Pedido"){
											echo '<tr style="background-color: #F08080">';
										}
										else{
											echo '<tr style="background-color: #F5F58C">';
										}
										echo "<td align='center' style='font-size: 1.5em'>".$paquete->date;
										echo "</td><td align='center' style='font-size: 1.5em'>".$paquete->price['cant']."</td>";
										echo "<td align='center' style='font-size: 1.5em'>".$paquete->estado."</td>";
										echo "</tr>"; 
									}
								}
							?>
						</table>
					</td>
					<td valign="button">
						<?php
						echo "Total a pagar:<br>";
						echo $tot." $<br>";
						echo "<form method='post' action='controlador_pedido.php'>";
							echo '<input type="hidden" name="tot" id="tot" value="'.$tot.'">';
							echo '<input type="hidden" name="estado" id="estado" value="'.$_SESSION['estado'].'">';
							echo '<input type="hidden" name="us" id="us" value="'.$_SESSION['usuario'].'">';
							echo "<input style='background-color: grey; color: white; width: 90px; border-radius: 5px' name='Submit' type='submit' value='Comprar'>";
						echo "</form>";
						?>
					</td>
				</tr>
			</table>
		</div>
	</section>
</body>
</html>