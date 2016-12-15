<?php 

if (isset($_POST['idCatalogo']) ) {
		include("Conexion.php");		
		$idCatalogo=$_POST['idCatalogo'];
		$cx=conectar();			
		$query="Select*,td.nombre as nombre_tienda,of.nombre as nombre_oferta,of.descripcion as ofeta_descripcion,DATE(of.fechaInicio) as ofertafe_inicio, DATE(of.fechaFinal) as ofertafe_final
From Detalle_Catalogo_Productos dcp, Imagen_Catalogo ic,Oferta of,catalogo cat,tienda td

WHERE  dcp.Oferta_idOferta=ic.Detalle_Catalogo_Productos_Oferta_idOferta 
AND dcp.Catalogo_idCatalogo=ic.Detalle_Catalogo_Productos_Catalogo_idCatalogo
AND of.idOferta=dcp.Oferta_idOferta
AND dcp.Catalogo_idCatalogo= cat.idCatalogo
AND cat.Tienda_idTienda=td.idTienda
AND dcp.Catalogo_idCatalogo={$idCatalogo}";
		//echo $query;
		$resultado=mysqli_query($cx,$query);		
		desconectar($cx);				
		if (($resultado->num_rows) > 0) {
				while ($row = mysqli_fetch_assoc($resultado)) {
					$row["Resultado"]="Correcto";
					$output[]=$row;				
				}				

				if (isset($_POST['Movil']) && $_POST['Movil'] == "android") {
					print(json_encode($output));
					exit;				
				}
				print(json_encode($output));
			
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
	<title>Listar Ofertas del Catalogo</title>
</head>
<body>
	<h1>prueba Listar Clientes </h1>
	<form action="<?php $_PHP_SELF ?>" method="post">
	Cod Agente de Credito:  <input type="text" name="idCatalogo" value="" /> <br/>		
	<input type="submit" name="btnSubmit" value="Login">
		
	</form>
</body>
</html>