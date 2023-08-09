<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center">
		<table width="90%">
			<tr>
				<td align="center" style="font-size: 1.5em">Usuario</td>
				<td align="center" style="font-size: 1.5em">Fecha</td>
				<td align="center" style="font-size: 1.5em">Monto</td>
				<td align="center" style="font-size: 1.5em">Estado</td>
				<td align="center" style="font-size: 1.5em"></td>
			</tr>
			<?php
				$pedidos = simplexml_load_file("xml/pedidos.xml");
				foreach($pedidos as $paquete)
				{
					echo "<tr>";
					echo '<td align="center" style="font-size: 1.5em">'.$paquete->user.'</td>';
					echo '<td align="center" style="font-size: 1.5em">'.$paquete->date.'</td>';
					echo '<td align="center" style="font-size: 1.5em">'.$paquete->price["cant"].'$</td>';
					echo '<td align="center" style="font-size: 1.5em">'.$paquete->estado.'</td>';
					echo "<form method='post'>";
						echo "<input type='hidden' name='nombre' id='nombre' value='".$paquete->user."'>";
						echo "<input type='hidden' name='fecha' id='fecha' value='".$paquete->date."'>";
						echo "<td><input name='Submit' type='submit' value='Update'></td>";
					echo "</form>";
					echo "</tr>";
				}
			?>
		</table>
		<?php
			if (isset ($_POST['Submit'])) {
				$date = $_POST['fecha'];
				$doc = new DOMDocument();
				$doc->load('xml/pedidos.xml');
				$nodoslista = $doc->getElementsByTagName('paquetes');
				$edicion=null;
				for ($i=0; $i < $nodoslista->length; $i++) { 
					$lista = $nodoslista->item($i)->childNodes;
					for ($j=0; $j < $lista->length; $j++) { 
						if (((string) $lista->item($j)->nodeName)=='date' && ((string) $lista->item($j)->nodeValue)==$date) {
							if ($lista->item(3)->nodeValue=="Pedido") {
								$lista->item(3)->nodeValue="Pagado";
							}
							else if ($lista->item(3)->nodeValue=="Pagado") {
								$lista->item(3)->nodeValue="Enviado";
							}
							else if ($lista->item(3)->nodeValue=="Enviado") {
								$lista->item(3)->nodeValue="Entregado";
							}
							$edicion =1;
							break 2;
						}
					}
				}
				if ($edicion!==null) {
					$doc->save('xml/pedidos.xml');
					echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=admind.php">';
				}
			}	
			?>
	</div>
</body>
</html>