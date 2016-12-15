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

Class Oferta {

    function cargar($idTienda){
      $cx=conectar();
      $query="Select*,td.nombre as nombre_tienda,of.nombre as nombre_oferta,of.descripcion as oferta_descripcion, DATE(of.fechaInicio) as ofertafe_inicio, DATE(of.fechaFinal) as ofertafe_final
      From Detalle_Catalogo_Productos dcp, Imagen_Catalogo ic,Oferta of,catalogo cat,tienda td
       WHERE dcp.Oferta_idOferta=ic.Detalle_Catalogo_Productos_Oferta_idOferta AND dcp.Catalogo_idCatalogo=ic.Detalle_Catalogo_Productos_Catalogo_idCatalogo AND of.idOferta=dcp.Oferta_idOferta AND dcp.Catalogo_idCatalogo= cat.idCatalogo AND cat.Tienda_idTienda=td.idTienda And td.idTienda={$idTienda}";
      $resultado=mysqli_query($cx,$query);    
      desconectar($cx);
     return $resultado;
    } 

     function ListarOfertas($idCatalogo){
      $cx=conectar();
      $query="Select*,td.nombre as nombre_tienda,of.nombre as nombre_oferta,of.descripcion as ofeta_descripcion,DATE(of.fechaInicio) as ofertafe_inicio, DATE(of.fechaFinal) as ofertafe_final
			From Detalle_Catalogo_Productos dcp, Imagen_Catalogo ic,Oferta of,catalogo cat,tienda td
			WHERE  dcp.Oferta_idOferta=ic.Detalle_Catalogo_Productos_Oferta_idOferta 
			AND dcp.Catalogo_idCatalogo=ic.Detalle_Catalogo_Productos_Catalogo_idCatalogo
			AND of.idOferta=dcp.Oferta_idOferta
			AND dcp.Catalogo_idCatalogo= cat.idCatalogo
			AND cat.Tienda_idTienda=td.idTienda
			AND dcp.Catalogo_idCatalogo={$idCatalogo}";
			
      $resultado=mysqli_query($cx,$query);    
      desconectar($cx);
     return $resultado;
    }

    function CrearOferta($Imagen,$datos){    
    	//Insertamos la Oferta
       $cx=conectar();      
      $query0="INSERT INTO oferta(idOferta,nombre, descripcion,descuento,precio,fechaInicio,fechaFinal,dias,estado) 
      VALUES (NULL,'{$datos['Nombre']}','{$datos['Descripcion']}','{$datos['Descuento']}','{$datos['Precio']}',
       '{$datos['FechaInicio']}','{$datos['FechaFin']}',{$datos['Dias']},{$datos['Estado']});";   
         //echo $query0;        
      	$resultado0 = mysqli_query($cx,$query0); 
      	
       //obtiene la ultima id de la Oferta Insertada
	    $queryID="SELECT max(idOferta) as idMax FROM oferta";
	    $result = mysqli_query($cx,$queryID);
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $IdMaxOferta=$row['idMax'];	    

      //Insertamos la Imagen de Catalogo         	      
	      $query2="INSERT INTO detalle_catalogo_productos(Catalogo_idCatalogo, Oferta_idOferta) 
	      VALUES ({$datos['IdCatalogo']},{$IdMaxOferta});";   
	      echo $query2; 
	     $resultado3 = mysqli_query($cx,$query2);


      //Insertamos la Imagen de Catalogo 
	      	 $hora   = date("H:i:s");
	      	 $fecha  = date("Y-m-d");
	      	$Hora= md5($hora);
	       $NombreIMG="OFERTA_".$datos['IdCatalogo']."_".$IdMaxOferta."_".$fecha.$Hora.".JPG";
	        $NombreIMG= str_replace(' ', '_', $NombreIMG);
	       $URL=$datos['RutaCatalogo']. $NombreIMG;
	       $URL= str_replace(' ', '_', $URL);
	       $URL1="http://localhost:8080/TiendaOnline/Vista/".$URL;
	      $query5="INSERT INTO imagen_catalogo(idImagenCatalogo,nombre, estado, url, formato, Detalle_Catalogo_Productos_Catalogo_idCatalogo, Detalle_Catalogo_Productos_Oferta_idOferta) 
	      VALUES (NULL,'{$NombreIMG}','{$datos['Estado']}','{$URL1}','{$datos['Formato']}',
	       {$datos['IdCatalogo']},{$IdMaxOferta});";   
	        echo $query5; 
	     $resultado5 = mysqli_query($cx,$query5);
       desconectar($cx);

       	if(preg_match('/data:image\/(gif|jpeg|png);base64,(.*)/i', $Imagen, $matches))
		{
		    $imageType = $matches[1];
		   
		    $imageData = base64_decode($matches[2]);

		    $image = imagecreatefromstring($imageData);

		   $filename = md5($imageData) . '.jpg';
		    //$filename = $imageData.'.jpg';
		   //echo $filename;
		    
		    if(imagepng($image, '../Vista/'.$URL))
		    {
		        echo json_encode(array('filename' => '../Vista/'.$URL));
		    } else {
		        throw new Exception('Could not save the file.');
			    }
			} else {
			    throw new Exception('Invalid data URL.');
			}
      }  

}
 ?>
