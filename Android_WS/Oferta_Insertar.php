<?php 

if (isset($_POST['idCatalogo']) ) {
		include("Conexion.php");	
		$idCatalogo=$_POST['idCatalogo'];	
		$nombreOferta=$_POST['nombre_oferta'];
		$descripcion_Oferta=$_POST['descripcion_Oferta'];	
		$descuento=$_POST['descuento'];		
		$precio=$_POST['precio'];
		$fechaFinal=$_POST['fechaFinal'];
		$nombreImg=$_POST['nombreImg'];
		$Url=$_POST['url'];	

		$dias=30;
		$estado=1;
		$formato="JPG";

		date_default_timezone_set("America/La_Paz");
            $fechaRegistro  = date("Y-m-d");
            $hora   = date("H:i:s");
            $anho   = date("Y");
		$fechaInicio=$fechaRegistro." ".$hora;


		$cx=conectar();
		// Inserta la Oferta
		$query1="INSERT INTO oferta(idOferta, nombre, descripcion, descuento, precio, fechaInicio,
		 fechaFinal, dias, estado)
		  VALUES (NULL,'{$nombreOferta}','{$descripcion_Oferta}','{$descuento}',{$precio},
		  	'{$fechaInicio}','{$fechaFinal}',{$dias},{$estado})";
		//echo $query;
		$resultado=mysqli_query($cx,$query1);
		desconectar($cx);

		$cx=conectar();
		//--Obtener la id de la oferta insertada
		$query2="SELECT MAX(idOferta) as idMax FROM oferta";		
		$resultado2=mysqli_query($cx,$query2);
		$row = mysqli_fetch_array($resultado2,MYSQLI_ASSOC);
		$idOfertaActual=$row['idMax'];
		echo $idOfertaActual;
		desconectar($cx);

		$cx=conectar();
		//-- Insertar a Detalles Catalogos
		$query3="INSERT INTO detalle_catalogo_productos(Catalogo_idCatalogo,Oferta_idOferta) 
		VALUES ({$idCatalogo},{$idOfertaActual})";
		$resultado3=mysqli_query($cx,$query3);
		echo $query3;
		//--Insertar Imagenes de los Catalogos
		$query4="INSERT INTO imagen_catalogo(idImagenCatalogo, nombre, estado, url, formato, Detalle_Catalogo_Productos_Catalogo_idCatalogo, Detalle_Catalogo_Productos_Oferta_idOferta) 
		VALUES (NULL,'{$nombreImg}','{$estado}','{$Url}','{$formato}',{$idCatalogo},{$idOfertaActual})";
		$resultado4=mysqli_query($cx,$query4);

		//desconectar($cx);		

		if (mysqli_affected_rows($cx)>0) {	//Verifica si se afecto una fila o se si se inserto
			  
			 if (isset($_POST['Movil']) && $_POST['Movil'] == "android") {
					echo "Correcto";
					exit;						
				}
				echo "Correcto";
			
		}else{				

			if (isset($_POST['Movil']) && $_POST['Movil'] == "android") {
				echo "Falla";
				exit;				
			}
				echo "Falla";
		}
	desconectar($cx);		
}		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Oferta</title>
</head>
<body>
	<h1>prueba  Insertar Oferta</h1>
	<form action="<?php $_PHP_SELF ?>" method="post">
	idCatalogo:<input type="text" name="idCatalogo"/> <br/>
	nombre oferta:<input type="text" name="nombre_oferta"/> <br/>
	descripcion Oferta:<input type="text" name="descripcion_Oferta"/> <br/>	
	precio:<input type="text" name="precio"/> <br/>	
	descuento:  <input type="text" name="descuento"/> <br/>
	Fecha Final:  <input type="text" name="fechaFinal" /> <br/>
	Nombre IMG:  <input type="text" name="nombreImg"/> <br/>
	URL :  <input type="text" name="url" /> <br/>		

	<input type="submit" name="btnSubmit" value="Insertar">
		
	</form>
</body>
</html>