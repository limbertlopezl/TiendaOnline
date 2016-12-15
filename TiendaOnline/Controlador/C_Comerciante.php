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

require('../Modelo/M_Comerciante.php');
$md=new Comerciante();
//echo $_POST['Registrar'];
if(isset($_POST['Registrar'])){
   

    $datos['Nombre']=$_POST['Nombre'];
    $datos['Apellido']=$_POST['Apellido'];    
    $datos['CI']=$_POST['CI']; 
     $datos['NIT']=$_POST['Nit'];      
    $datos['Genero']=$_POST['Genero'];
    $datos['Estado']=1;
    $datos['Password']=$_POST['CI']; 
    $datos['User']=$_POST['Nombre'];
    $sx=$md->insertar($datos);   
    header("Location: ../Vista/V_Comerciante.php");      
   
}

?>

 