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
require('../Modelo/M_Oferta.php');
$md=new Oferta();

if(isset($_POST['Descripcion'])){  
      date_default_timezone_set("America/La_Paz");
            $fechaRegistro  = date("Y-m-d");
            $hora   = date("H:i:s");
            $anho   = date("Y");
    $dateTime=$fechaRegistro." ".$hora;

  
    //Datos para la Tabla Oferta
    $Descripcion=$_SESSION['DescripcionOferta'];
    $datos['Descripcion'] = $Descripcion;
    $datos['Nombre'] = $_SESSION['DescripcionOferta']; 
    $datos['Descuento']=0;
    $datos['Precio']=0;
    $datos['FechaFin']=$_SESSION['FechaFin']." ".$hora;
    $datos['FechaInicio']=$dateTime;
    $datos['Estado']=1;
    $datos['Dias']=1;

    //Datos para tabla Imagen Catalogo
    $Imagen = $_POST['image'];//Contiene la imagen en bits
    $datos['Formato']="JPG";
    $datos['IdCatalogo']=$_SESSION['IdCatalogo'];  
    $datos['RutaCatalogo']=$_SESSION['RutaCatalogo'];       
    $md->CrearOferta($Imagen, $datos);
    //header("Location: ../Vista/V_Catalogo.php");  
}


?>

 