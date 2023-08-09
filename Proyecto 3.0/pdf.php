<?php
	require('fpdf/fpdf.php');
	$pdf = new FPDF('P', 'mm', 'A4');
	$pdf->AddPage();
	$pdf->Image('imagen/imp.png',10,0,40,40,'PNG');
	$pdf->SetXY(70,10);
	$pdf->SetFont('Arial','B',26);
	$pdf->Cell(40,10,utf8_decode('Blue Dragon'));
	$pdf->SetXY(70,20);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(40,10,utf8_decode('FICHA DE PAGO'));

	session_start();	
	if($_SESSION['estado'] == "Autenticado"){
		$pdf->SetFont('Arial','I',12);
		$pdf->SetXY(15,35);
		$pdf->Cell(10,10,'Nombre: '.$_SESSION['usuario']);
		$pdf->SetXY(70,35);
		$date = date("Y-m-j H:i:s");
		$pdf->Cell(10,10,utf8_decode('Impresión: '));
		$pdf->SetXY(95,35);
		$pdf->Cell(10,10,$date);
		$pdf->SetXY(150,35);
		$pdf->Cell(10,10,rand());

		$pdf->SetXY(45,50);
		$pdf->Cell(10,10,'Producto');
		$pdf->SetXY(107,50);
		$pdf->Cell(10,10,'Cantidad');
		$pdf->SetXY(135,50);
		$pdf->Cell(10,10,'Precio');
		$pdf->SetXY(160,50);
		$pdf->Cell(10,10,'Total por producto');

		$tot = 0;
		$y=60;
		$x=15;
		$carro = simplexml_load_file("xml/carro.xml");
		foreach($carro as $cliente)
		{
			if($cliente->user == $_SESSION['usuario']){
				$totp = $cliente->precio['price'] * $cliente->cantidad['cant'];
				$tot += $totp;
				$pdf->SetXY($x,$y);
				$pdf->SetFont('Arial','I',12);
				$pdf->Cell(10,10,$cliente->nombre);
				$x+=100;
				$pdf->SetXY($x,$y);
				$pdf->Cell(10,10,$cliente->cantidad['cant']);
				$x+=20;
				$pdf->SetXY($x,$y);
				$pdf->Cell(10,10,$cliente->precio['price'].'$');
				$x+=35;
				$pdf->SetXY($x,$y);
				$pdf->Cell(10,10,$totp.'$');
				$y+=10;
				$x=15;
			}
		}
		$pdf->SetFont('Arial','U',12);
		$pdf->SetXY(138,$y);
		$pdf->Cell(10,10,'Total a pagar:   '.$tot.'$');
		$y+=10;
		$pdf->SetFont('Arial','B',14);
		$pdf->SetXY(15,$y);
		$pdf->Cell(10,10,utf8_decode('Antes de pagar, corrobora lo siguiente:'));
		$y+=10;
		$pdf->SetFont('Arial','I',10);
		$pdf->SetXY(15,$y);
		$pdf->Cell(10,10,utf8_decode('La información de los productos sea correcta'));
		$y+=10;
		$pdf->SetXY(15,$y);
		$pdf->Cell(10,10,utf8_decode('No se autorizan reembolsos por errores en el pago'));
		$y+=10;
		$pdf->SetXY(15,$y);
		$pdf->Cell(10,10,utf8_decode('Debes esperar a que la operación del pago sea procesada para autorizar el envió de tu compra'));
		$y+=10;
		$pdf->SetXY(15,$y);
		$pdf->Cell(10,10,utf8_decode('Conserva tu copia para cualquier aclaración'));
		$y+=20;
		$pdf->Image('imagen/codigo.jpg',70,$y,80,20,'JPG');
		$y+=20;
		$pdf->SetFont('Arial','B',14);
		$pdf->SetXY(70,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(75,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(80,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(85,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(90,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(95,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(100,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(105,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(125,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(110,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(115,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(120,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(130,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(135,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(140,$y);
		$pdf->Cell(10,10,rand(1,9));
		$pdf->SetXY(145,$y);
		$pdf->Cell(10,10,rand(1,9));
	}

	$pdf->Output('prueba.pdf', 'I');
?>