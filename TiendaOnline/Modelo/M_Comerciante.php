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
require('Conexion.php');

Class Comerciante {

    function cargar(){
      $cx=conectar();
      $query="SELECT * FROM comerciante";
      $resultado=mysqli_query($cx,$query);    
      desconectar($cx);
     return $resultado;
    } 
     function Login($user,$pass){
      $cx=conectar();
      $query="SELECT t.idTienda,t.nombre as NombreTienda, t.Ubicacion_idUbicacion as idUbicacion, c.idComerciante,c.nombre as nombreComerciante
          FROM comerciante c,tienda t 
          WHERE c.idComerciante=t.Comerciante_idComerciante
           AND password='{$pass}' AND user='{$user}'";
      $resultado=mysqli_query($cx,$query);    
      desconectar($cx);


      
     return $resultado;
    }

    function insertar($datos) {
	$cx=conectar();  	

     $query1="INSERT INTO comerciante(idComerciante,nombre, apellido,ci,nit,genero,password,user,estado) 
     VALUES (NULL,'{$datos['Nombre']}','{$datos['Apellido']}','{$datos['CI']}','{$datos['NIT']}','{$datos['Genero']}',
     '{$datos['Password']}','{$datos['User']}',{$datos['Estado']});";    
    $resultado1 = mysqli_query($cx,$query1);    
   desconectar($cx);  
	}

  
}

?>
