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

require('../Modelo/M_Tienda.php');
$md=new Tienda();
//echo $_POST['Registrar'];
if(isset($_POST['Registrar'])){
   

    $datos['Comerciante']=$_POST['Comerciante'];
    $datos['Nombre']=$_POST['Nombre'];  
    $datos['Descripcion']=$_POST['Descripcion'];    
    $datos['Telefono']=$_POST['Telefono']; 
     $datos['Direccion']=$_POST['Direccion'];      
    $datos['Horario']=$_POST['Horario'];    
    $datos['Web']=$_POST['Web']; 
    $datos['Estado']=1;   
    //Ubicacion
    $datos['Latitud']=$_POST['Latitud']; 
    $datos['Longitud']=$_POST['Longitud'];

   $sx=$md->insertar($datos);   
    header("Location: ../Vista/V_Tienda.php");      
   
}

?>

 