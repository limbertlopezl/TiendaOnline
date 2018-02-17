<?php 
/**
* Program: cerrarSesion.php
* Objetive: cerrar todas las sesiones del usuario
* Description: gestiona la informacion de las sesiones del usuario.
* @query_string Parámetro recibido en el query string
* @post   Ninguno
* @get    Ninguno
* @author   Limbert Lopez
* @called_by: varios
* @calls:ninguno
*/

session_start(); 
$_SESSION=array(); 
session_destroy(); 
//lo redirecciono a la página anterior 
header("location:./V_Login.php"); 

 ?>