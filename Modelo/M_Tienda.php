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

Class Tienda {

    function cargar(){
      $cx=conectar();
      $query="SELECT * FROM tienda";
      $resultado=mysqli_query($cx,$query);    
      desconectar($cx);
     return $resultado;
    } 

    function insertar($datos) {
	$cx=conectar();  	
      //Insertar Ubicacion
    $query0="INSERT INTO ubicacion(idUbicacion,latitud,longitud,estado) 
    VALUES (NULL,{$datos['Latitud']},{$datos['Longitud']},{$datos['Estado']});";
     $resultado1 = mysqli_query($cx,$query0);
    echo $query0;
     //obtiene la ultima id del usuario insertado
    $queryID="SELECT max(idUbicacion) as idMax FROM ubicacion";
    $result = mysqli_query($cx,$queryID);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $idUbicacion=$row['idMax'];

    //Insertar Tienda
     $query1="INSERT INTO tienda(idTienda,Ubicacion_idUbicacion,Comerciante_idComerciante, nombre,descripcion,telefono, direccion,horario,estado,paginaWeb)
      VALUES (NULL,{$idUbicacion},{$datos['Comerciante']},'{$datos['Nombre']}','{$datos['Descripcion']}',
      '{$datos['Telefono']}','{$datos['Direccion']}','{$datos['Horario']}','{$datos['Estado']}','{$datos['Web']}');";    

       echo $query1;
    $resultado2 = mysqli_query($cx,$query1);    
   desconectar($cx);  
   //Creando Carpetas para tienda
   $nombreTienda=$datos['Nombre'];
    $RECURSOS="../Vista/Recursos/Tienda/".$nombreTienda;
        mkdir($RECURSOS, 0777);//creacion de una carpeta con el codigo del trabajador
        chmod($RECURSOS, 0777);//cambiando permisos de la carpeta      
	}

  
}

?>
