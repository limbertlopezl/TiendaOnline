<?php 
/**
* Program: M_Cliente.php
* Objetive: Ofrece  el acceso a la tabla Cliente
* Description: gestiona la informacion de la tabla cliente.
* @query_string Parámetro recibido en el query string
* @post   Ninguno
* @get    Ninguno
* @author   Limbert Lopez
* @called_by: C_Cliente.php
* @calls:ninguno
*/
  

//Primer ejemplo de cadena con espacios en blanco al comienzo y final
$cadena = " frase lo frase ";
//$cadena_formateada = rtrim($cadena);
$cadena_formateada = str_replace(' ', '_', $cadena);
echo "La cadena original es esta: '".$cadena."' y la formateada es esta otra: '".$cadena_formateada."'";
 


?>
