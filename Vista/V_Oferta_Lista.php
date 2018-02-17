<?php 
/**
* Program:  V_Cliente_Lista.php
* Objetive: Obtener una lista de usuarios Cliente del sistema
* Description:Este programa lee la tabla Cliente y recorre todos sus registros guardando
*             en un Json todos los valores leidos.
* @query_string Parámetro recibido en el query string
* @post   $VarPost1: ninguna
* @get    $VarGet: ninguna
* @author   Limbert Lopez
* @called_by: V_Cliente.php
* @calls: M_Cliente.php
*/

require("../Modelo/M_Oferta.php");    //Metodo cargar lista de clientes.
$md=new Oferta();
$idTienda="1";
$resultadoOferta=$md->cargar($idTienda);  
$dir="";
  $tabla = "";
  $c=1;
  while($rowTienda = mysqli_fetch_array($resultadoOferta,MYSQLI_ASSOC)){  

     $editar = '<a href=\"#\"><img border=\"0px\" width=\"450\" height=\"500\" src=\"'.$rowTienda['url'].'\" alt=\"Entrar\"/></a>';
     
    $tabla.='{"Nr":"'.$c.'","Cod":"'.$rowTienda['idOferta'].'","Descripcion":"'.$rowTienda['oferta_descripcion'].'",
    "FechaFin":"'.$rowTienda['ofertafe_final'].'","FechaInicio":"'.$rowTienda['ofertafe_inicio'].'",
    "Estado":"'.$rowTienda['estado'].'","Editar":"'.$editar.'"},';     
     $c++;
  }
  $tabla = substr($tabla,0, strlen($tabla) - 1);
  echo '{"data":['.$tabla.']}'; 
 ?>
  