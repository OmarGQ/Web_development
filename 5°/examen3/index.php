<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="funciones.js"></script>
	<title></title>
</head>
<body>
	<div align="center">
		<p style="color: red; font-size: 2em"><b><u>Carrito de compras</u></b></p>
		<table width="30%">
			<tr>
				<td width="100%">
					<table>
						<tr>
							<form name="form" id="form" method="get" action="proceso.php">
								<td width="20%">
									<label>Productos: </label>
								</td>
								<td width="20%">
									<select name="Id" id="Id">
									   <option value="1">Taco</option> 
									   <option value="2">Torta</option> 
									   <option value="3">Refresco</option>
									   <option value="4">Tamal</option> 
									   <option value="5">Posole</option>
									</select>
								</td>
								<td width="20%">
									<label>Cantidad: </label>
								</td>
								<td width="20%">
									<select name="cant" id="cant">
									   <option value="1">1</option> 
									   <option value="2">2</option> 
									   <option value="3">3</option>
									   <option value="4">4</option> 
									   <option value="5">5</option>
									   <option value="6">6</option> 
									   <option value="7">7</option> 
									   <option value="8">8</option>
									   <option value="9">9</option> 
									   <option value="10">10</option>
									</select>
								</td>
								<td width="20%">
									<input type="submit" name="submit" value="comprar" style="background-color: blue; color: white">
								</td>
							</form>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								<input type="checkbox" name="acept" id="acept"  onclick="condiciones()" style="width: 1.2em; height: 1.2em">
							</td>
							<td>
								<label>Facturar</label>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table border="1px">
						<tr>
							<td width="20%">
								<label>Producto</label>
							</td>
							<td width="20%">
								<label>Precio U</label>
							</td>
							<td width="20%">
								<label>Cantidad</label>
							</td>
							<td width="20%">
								<label>Iva</label>
							</td>
							<td width="20%">
								<label>Total</label>
							</td>
						</tr>
						<?php
							$totp;
							$tot = 0;	
							$totiva = 0;
							$carro = simplexml_load_file("table.xml");
								foreach($carro as $producto)
								{
									$totp = $producto->precio['price'] * $producto->cantidad['cant'];
									$tot += $totp;
									$iva = $totp * 0.16;
									$totiva += $iva;
									echo "<tr>";
									echo "<td align='center' style='font-size: 1.5em'>".$producto->nombre;
									echo "</td>";
									echo "<td align='center' style='font-size: 1.5em'>".$producto->precio['price']."$</td>";
									echo "<td align='center' style='font-size: 1.5em'>".$producto->cantidad['cant']."</td>";
									echo "<td></td>";
									echo "<td align='center' style='font-size: 1.5em'>".$totp."$</td>";
									echo "</tr>"; 
								}
						?>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table width="100%">
						<tr>
							<td width="65%">
								<a href="pdf.php">
									<button style="background-color: blue; color: white">Imprimir</button>
								</a>
							</td>
							<td width="15%">
								<table>
									<tr>
										<td>
											<label>Iva</label>
										</td>
									</tr>
									<tr>
										<td>
											<label>Subtotal</label>
										</td>
									</tr>
									<tr>
										<td>
											<label>Total</label>
										</td>
									</tr>
								</table>
							</td>
							<td width="20%">
								<table border="1px" width="100%">
									<tr>
										<td>
											<?php
												echo $totiva.'$';
											?>
										</td>
									</tr>
									<tr>
										<td>
											<?php
											$sub = $tot - $totiva;
												echo $sub.'$';
											?>
										</td>
									</tr>
									<tr>
										<td>
											<?php
											echo $tot.'$';
											?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>