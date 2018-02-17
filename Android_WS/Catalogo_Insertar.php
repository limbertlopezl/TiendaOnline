<?php 

if (isset($_POST['idTienda']) ) {
		include("Conexion.php");	
		$idTienda=$_POST['idTienda'];	
		$nombre=$_POST['nombre_Catalogo'];
		$descripcion=$_POST['descripcion_Catalogo'];	
		$portada=$_POST['portada'];		
		$fechaFinal=$_POST['fechaFinal'];		
		
		date_default_timezone_set("America/La_Paz");
            $fechaRegistro  = date("Y-m-d");
            $hora   = date("H:i:s");
            $anho   = date("Y");
		$fechaInicio=$fechaRegistro." ".$hora;
		$cx=conectar();
		
		$query="INSERT INTO catalogo(idCatalogo, Tienda_idTienda, nombre, 
			descripcion, portada, fechaInicio, fechaFinal, estado)
		 VALUES (NULL, {$idTienda},'{$nombre}','{$descripcion}', '{$portada}','{$fechaInicio}', '{$fechaFinal}',1)";
		echo $query;
		$resultado=mysqli_query($cx,$query);		
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
		
}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Catalogo</title>
</head>
<body>
	<h1>prueba  Insertar Catalogo</h1>
	<form action="<?php $_PHP_SELF ?>" method="post">
	idTienda:<input type="text" name="idTienda"/> <br/>
	nombre:<input type="text" name="nombre_Catalogo"/> <br/>	
	Descripcion:<input type="text" name="descripcion_Catalogo"/> <br/>	
	Portada:  <input type="text" name="portada"/> <br/>
	Fecha Final:  <input type="text" name="fechaFinal" /> <br/>		

	<input type="submit" name="btnSubmit" value="Insertar">
		
	</form>
</body>
</html>