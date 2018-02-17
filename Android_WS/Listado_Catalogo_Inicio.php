<?php 

if (isset($_POST['Movil']) ) {
		include("Conexion.php");		
		
		$cx=conectar();			
		$query="Select cat.idCatalogo,cat.Tienda_idTienda as idTienda,td.nombre as nombre_tienda,cat.nombre as nombre_catalogo,cat.descripcion as catalogo_descripcion,DATE(cat.fechaInicio) as catalogofe_inicio, DATE(cat.fechaFinal) as catalogofe_final,cat.estado as catalogo_estado,portada
From catalogo cat,tienda td
WHERE cat.Tienda_idTienda=td.idTienda ";
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
	<title>Listar Catalogos</title>
</head>
<body>
	<h1>prueba Listar Clientes </h1>
	<form action="<?php $_PHP_SELF ?>" method="post">
	Cod Agente de Credito:  <input type="text" name="Movil" value="" /> <br/>		
	<input type="submit" name="btnSubmit" value="Login">
		
	</form>
</body>
</html>