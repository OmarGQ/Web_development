<?php
	$valor = $_POST['busqueda'];
	session_start();
	$servidor = 'localhost';
	$usuario = 'cetianosunidos';
	$pass = 'baa27c2e5';
	$db = 'cetianosunidos';

	$conexion = new mysqli($servidor, $usuario, $pass, $db);
	$sql2="update usuarios set preferencia = '".$valor."' where nombre = '".$_SESSION['usuario']."'";
	if ($conexion->query($sql2) === TRUE) {
		
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$producto = array();
	$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
	$dbh->query("SET NAMES 'utf8'");
	//$sql="update usuarios set preferencia = '".$valor."' where email = '".$_SESSION['user']."'";
	//$dbh->query($sql);
	$sql="select id, nombre, precio from productos where nombre LIKE '%".$valor."%'";
	foreach ($dbh->query($sql) as $res)
	{
		$producto[]=$res;
	}
	$dbh=null;
	require_once("../resultados.php");
?>