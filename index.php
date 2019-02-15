<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Titulo web</title>
</head>

<body>
<?php
////vamos a llamar nuestra base de datos 
include('conexiones/conectar.php'); ///hacemos un include para poder trabajar con el archivo
$conexion= $conexion();/// hacemos el llamado de la funcion 
	
$qConsulta = "SELECT * FROM  usuarios";		 /////consultamos  los usuarios en nuestra base de datos la tabla se llama usuarios					
$rConsulta = mysqli_query($conexion,$qConsulta ) or die(mysqli_error());	//// hacemos el llamado a la conexion								
$rowConsulta = mysqli_fetch_assoc($rConsulta); /// definimos el array que contiene la  informacion
	
	$nombre = $rowConsulta['nombre_usuario']; /// hacemos el llamado del nombre del usuario dentro de la tabla usuarios y la columna nombre_usuario
	
?>
</body>
</html>