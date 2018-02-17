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
require_once('Conexion.php');

Class Catalogo {

    function cargar(){
      $cx=conectar();
      $query="SELECT t.nombre as tienda,c.nombre,c.descripcion,c.Paginas,c.portada,c.fechaInicio,c.fechaFinal,c.estado,c.idCatalogo FROM catalogo c, tienda t WHERE c.Tienda_idTienda=t.idTienda";
      $resultado=mysqli_query($cx,$query);    
      desconectar($cx);
     return $resultado;
    } 
function ObtenerCatalogo($idCatalogo){
      $cx=conectar();
      $query="SELECT* FROM catalogo WHERE idCatalogo={$idCatalogo}";
      $resultado=mysqli_query($cx,$query);    
      desconectar($cx);
     return $resultado;
    } 
function Listar($idTienda){
      $cx=conectar();
      $query="SELECT t.nombre as tienda,c.nombre,c.descripcion,c.Paginas,c.portada,c.fechaInicio,c.fechaFinal,c.estado,c.idCatalogo FROM catalogo c, tienda t WHERE c.Tienda_idTienda=t.idTienda  AND t.idTienda={$idTienda}";
      $resultado=mysqli_query($cx,$query);    
      desconectar($cx);
     return $resultado;
    } 

    function insertar($datos) {
      //Creamos la Carpeta que representara al catalogo
      $nombreTienda=$datos['NombreTienda'];
      $nombreCatalogo=$datos['Nombre'];
       $nombreCatalogo = str_replace(' ', '_', $nombreCatalogo);
      $RECURSOS="../Vista/Recursos/Tienda/".$nombreTienda."/".$nombreCatalogo;
        mkdir($RECURSOS, 0777);//creacion de una carpeta con el codigo del trabajador
        chmod($RECURSOS, 0777);//cambiando permisos de la carpeta      
        $this->guardarImagen($RECURSOS); 
       // $this->Bitacora_RegistroLector($nombre, $codigo['codigo'], $fecha, $hora);
       
       $URL="http://localhost:8080/TiendaOnline/Vista/Recursos/Tienda/".$nombreTienda."/".$nombreCatalogo."/".basename($_FILES['PortadaCatalogo']['name']);;
       echo $URL;
      //Inserta la portada
    	$cx=conectar();
      
      $query1="INSERT INTO catalogo(idCatalogo,Tienda_idTienda, nombre,descripcion,portada,fechaInicio,fechaFinal,estado,Paginas) 
      VALUES (NULL,{$datos['Tienda']},'{$datos['Nombre']}','{$datos['Descripcion']}','{$URL}','{$datos['FechaInicio']}',
       '{$datos['FechaFin']}',{$datos['Estado']},{$datos['Paginas']});";   
         echo $query1; 
      $resultado1 = mysqli_query($cx,$query1);    
      desconectar($cx);  
	  }

    function guardarImagen($Dir){      
        //$target_path="$rutaMenu/empresas/".$idUser.$nombre.'/';
        $target_path=$Dir."/".basename($_FILES['PortadaCatalogo']['name']);
        if (move_uploaded_file($_FILES['PortadaCatalogo']['tmp_name'],$target_path)) {
            $name=basename($_FILES['PortadaCatalogo']['name']);        
            $_FILES['PortadaCatalogo']['name'];
        }
    }


  
}

?>
