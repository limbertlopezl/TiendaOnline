<?php 
/**
* Program: C_Cliente.php
* Objetive: Controla el acceso a los metodos de la clase Cliente
* Description: Controla la informacion que ingresa para luego ser enviado a los metodos
* @query_string Parámetro recibido en el query string
* @post   $Registrar: Primera variable obtenida por método POST
* @post   $Actualizar: Seguna variable obtenida por método POST
* @get    $VarGet: ninguno
* @author   Limbert Lopez
* @called_by: V_Cliente_Insertar.php y varios mas
* @calls: M_Cliente.php
*/
session_start();
require('../Modelo/M_Catalogo.php');
$md=new Catalogo();
//echo $_POST['Registrar'];
if(isset($_POST['Registrar'])){

   date_default_timezone_set("America/La_Paz");
            $fechaRegistro  = date("Y-m-d");
            $hora   = date("H:i:s");
            $anho   = date("Y");

    $dateTime=$fechaRegistro." ".$hora;
   $ImgName=basename($_FILES['PortadaCatalogo']['name']);
    $datos['Tienda']=$_SESSION['idTienda'];
    $datos['NombreTienda']=$_SESSION['nombreTienda'];
    $datos['Nombre']=$_POST['Nombre'];
    $datos['Descripcion']=$_POST['Descripcion'];    
    $datos['Portada']= $ImgName; 
    $datos['FechaFin']=$_POST['FechaFin']." ".$hora;
    $datos['FechaInicio']=$dateTime;
    $datos['Estado']=1;    
     $datos['Paginas']=10;
    echo  $ImgName;
    $sx=$md->insertar($datos);   
    header("Location: ../Vista/V_Catalogo.php");      
   
}

?>

 