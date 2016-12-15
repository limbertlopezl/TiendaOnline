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
require('../Modelo/M_Comerciante.php');
$md=new Comerciante();


if(isset($_POST['txtusername'])){
    $User=$_POST['txtusername'];
    $Pass=$_POST['txtpassword'];      
    $resultado=$md->Login( $User,$Pass);  
    if (mysqli_num_rows($resultado)>0) {
        $rowResultado=mysqli_fetch_array($resultado,MYSQLI_ASSOC);

        $_SESSION['idTienda']=$rowResultado['idTienda'];
        $_SESSION['nombreTienda']=$rowResultado['NombreTienda'];
        $_SESSION['idUbicacion']=$rowResultado['idUbicacion'];
        $_SESSION['idComerciante']=$rowResultado['idComerciante']; 
        $_SESSION['nombreComerciante']=$rowResultado['nombreComerciante'];        

        header("Location: ../Vista/V_Catalogo.php");
    }
    else{
    header("Location: ../Vista/V_Login.php");      
    }
   
}

?>

 