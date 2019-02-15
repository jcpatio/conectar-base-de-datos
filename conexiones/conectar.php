<?php
# JUAN CARLOS PATIÑO 2019 - TODOS LOS DERECHOS RESERVADOS
# jcpinversiones@gmail.com
# Conectar Base de datos
header('Access-Control-Allow-Origin: *');////<-- si queremos darle permiso de acceso externo fuera de nuestro servidor

////llamamos la funcion aqui empieza la funcion 
function conectar() {

	$usuario = "root"; //// usuario de la base de datos
	$contrasenia = "miClave"; //// contraseña del usuario de la base de datos
	$servidor = "localhost"; /// servidor donde nos vamos a conectar puede ser localhost si estas en local si es  remoto la ip con el puerto en caso tal
	$baseDatos = "miBaseDatos"; //// nombre de la base de datos que vamos a consultar 
	$conexion = mysqli_connect( $servidor, $usuario, $contrasenia, $baseDatos )or die( 'Ha fallado la conexion: ' . mysqli_error( $con ) );
	mysqli_set_charset( $con, "utf8" );


	return $conexion; ///lo que nos va a retornar la funcion
}



?>