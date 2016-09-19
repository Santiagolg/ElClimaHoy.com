<?php
include_once("callApi.php");

session_start();
if($_SESSION["usuario"]==NULL && $_SESSION["contra"]==NULL){
	header("Location: log.php");
}
else{
	$id= $_GET["id"];
	$_SESSION["id".$id]=callAPI("GET","http://api.openweathermap.org/data/2.5/weather",array("id"=> $id,"APPID"=>"38442bf3df9d7fdb004b10ceba923c38"));;


}

?>




<!DOCTYPE html>
<html>
<head>
	<title>ElClimaHoy.com</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<table style="width:100%">
  	<tr>
		<th>
			<div class= "busqueda">
				<h1>El clima en tu ciudad ahora</h1>
				<form action="ElClimaHoy.php" method="GET">
					<div>
						<INPUT TYPE="NUMBER" name="id" placeholder= "Ingrese una ID de ciudad">
					</div>
						<input type="submit" value="Ingresar">
				</form>
				<textarea name="info" cols="75" rows="20" readonly=readonly>
				 <?php echo $_SESSION["id".$id]; ?>;
				</textarea>
			</div>
		</th>
		<th>
			<div>
				<textarea name="info" class= "historial" cols="20" rows="20" readonly=readonly>
				Búsquedas Recientes
				</textarea>
			</div>
		</th>
	</tr>
		
</body>
</html>