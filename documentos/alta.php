
<!DOCTYPE>

<html>
<head>
	<title>Alta Documento</title>
</head>
<body>

		

<?php	
			// Conectamos con el servidor

			include ("conexion.php");



// Obtenemos los valores del Formulario

$fechaRegistro=$_POST['fechaRegistro'];
$NumeroDocumento=$_POST['NumeroDocumento'];
$fechaDocumento=$_POST['fechaDocumento'];
$asunto=$_POST['asunto'];
$idEstatus=$_POST['idEstatus'];
	
//$idEstatus=$_POST['idEstatus'];

// Armamos la sentencia de SQL

$insertar="INSERT INTO documentos VALUES ('null','$fechaRegistro',
									    '$NumeroDocumento',
								        '$fechaDocumento',
									    '$asunto',
									    '$idEstatus', 'null')";


// Ejecutamos la sentencia de sql

$resultado=mysqli_query($conexion,$insertar)
		or die("error al insertar el registro");
// Verificamos la ejecución 
mysqli_close($conexion);



	header("Location: tabla.php");
	//echo "Datos guardados correctamente <br><a href='index.html'>Volver</a>";

?>


</body>
</html>