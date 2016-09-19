<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');
	$user="";
	$pass ="";
	if (isset($_POST["usuario"])){
  		$user = $_POST["usuario"];	
	}

	if (isset($_POST["contra"])){
		$pass = $_POST ["contra"];
	}
	if ($user=="hola" && $pass=="hola"){
		session_start();
		$_SESSION["autenticado"]= "SI";
		$_SESSION["usuario"]= "hola";
		$_SESSION["contra"]= "hola";
		header ("Location: ElClimaHoy.php");
		exit();
	}
	
	
?>

	





<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>

	<div class= "contenedor">
		<h1>Log In</h1>
		<?if (($_SESSION["usuario"]!="hola") && $_SESSION["contra"]!="hola"){?>
					<font color="red"><b>Datos incorrectos</b></font>
				<?
				}?>
		<form action="log.php" method="POST">
			<div>
				<INPUT TYPE="TEXT" name="usuario" placeholder= "Usuario">
			</div>
			<div>
				<INPUT TYPE="password" name="contra" placeholder="Contraseña">
			</div>
			<input type="submit" value="Ingresar">
		</form>
		
		
	</div>
		
</body>
</html>