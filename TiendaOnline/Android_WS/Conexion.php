<?php 
/**
* Program: Conexion.php
* Objetive: Conectar con la base de datos
* Description: gestiona las conexiones con la base de datos.
* @query_string Parámetro recibido en el query string
* @post   Ninguno
* @get    Ninguno
* @author   Limbert Lopez
* @called_by: varios
* @calls:ninguno
*/

function conectar() {	
	$host     = "localhost";
	$dbname   = "wi721670_sw1fin";
	$user     = "wi721670_sw1fin";
	$pass     = "tuVUpeta41";

	$cx= mysqli_connect($host,$user,$pass,$dbname) or die("error en conexion");
	return $cx;
}

function desconectar($conexion) {   
   mysqli_close($conexion);

}
?>