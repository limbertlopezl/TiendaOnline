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

require("../Modelo/M_Comerciante.php");    //Metodo cargar lista de clientes.
$md=new Comerciante();
$resultadoEvento=$md->cargar();  

  $tabla = "";
  $c=1;
  while($rowEvento = mysqli_fetch_array($resultadoEvento,MYSQLI_ASSOC)){  
    $editar = '<a href=\"V_Cargo_Editar.php?IdCargo='.$rowEvento['idComerciante'].'\"><img border=\"0px\" width=\"35\" height=\"35\" src=\"assets/images/editar_cliente.png\" alt=\"Entrar\"/></a>';

    $tabla.='{"Nr":"'.$c.'","Cod":"'.$rowEvento['idComerciante'].'","Nombre":"'.$rowEvento['nombre'].'",
    "Apellido":"'.$rowEvento['apellido'].'","CI":"'.$rowEvento['ci'].'","Genero":"'.$rowEvento['genero'].'",
    "Estado":"'.$rowEvento['estado'].'","Editar":"'.$editar.'"},';   
     $c++;
  }
  $tabla = substr($tabla,0, strlen($tabla) - 1);
  echo '{"data":['.$tabla.']}'; 
 ?>
  