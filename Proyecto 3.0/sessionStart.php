<?php
	$user = $_POST['usuario'];
	$pass = $_POST['password'];
	if ($user == "" || $pass == "") {
		echo '<script language="javascript">';
		echo 'alert("LLene ambos campos")';
		echo '</script>';
	}else{
		if($user == "Admind" && $pass == "root"){
			echo '<script language="javascript">';
				echo 'window.open ("admind.php","mywindow","menubar=1,resizable=1,width=600,height=800")';
			echo '</script>';
		}else{
			$usuario = array();
			$cont = array();
			$dbh = new PDO('mysql:host=localhost;dbname=cetianosunidos', "cetianosunidos", "baa27c2e5");
			$dbh->query("SET NAMES 'utf8'");	
			$sql="select nombre from usuarios where email = '".$user."' and contrasena ='".$pass."'";
			$sql2="select count(email) from usuarios where email = '".$user."' and contrasena ='".$pass."'";
			foreach ($dbh->query($sql2) as $res)
			{
				$cont[]=$res;
			}
			if ($cont[0]['count(email)'] != 0) {
				foreach ($dbh->query($sql) as $res)
				{
					$usuario[]=$res;
				}
				$dbh=null;
				session_start(); 
				   $_SESSION['usuario'] = $usuario[0]['nombre'];
				   $_SESSION['estado'] = 'Autenticado'; 
				   $_SESSION['user'] = $user;
				   header('Location: menu.php');
			}else{
				echo '<script language="javascript">';
				echo 'alert("Datos no congruentes")';
				echo '</script>';
			}
		}
	}
	require_once("menu.php");
?>