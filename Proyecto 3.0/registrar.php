<?php
	$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
	$sql="INSERT INTO `cetianosunidos`.`usuarios` (`id` , `nombre` ,`apellidos` ,`direccion` ,`ciudad` ,`estado` ,`postal` ,`f_nacimiento` ,`email` ,`contrasena` ,`targeta` ,`tipo_t` ,`f_vencimento1` ,`f_vencimento2`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt= $dbh->prepare($sql);
	$stmt->execute([$_POST['nombre'], $_POST['apellido'], $_POST['direccion'], $_POST['ciudad'], $_POST['estado'], $_POST['postal'], $_POST['nac'], $_POST['email'], $_POST['pas'], $_POST['targeta'], $_POST['tipo'], $_POST['mes'], $_POST['ano']]);
	echo "El registro ha sido exitoso";
?>