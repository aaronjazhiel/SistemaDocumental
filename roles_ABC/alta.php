<!DOCTYPE>

<html>
<head>
	<title>Alta Roles</title>
</head>
<body>



<?php	
			// Conectamos con el servidor

			include ("conexion.php");
	
// Obtenemos los valores del Formulario

$descripcion=$_POST['descripcion'];

$nemonico=$_POST['nemonico'];

$orden=$_POST['orden'];

// Armamos la sentencia de SQL

$insertar="INSERT INTO roles VALUES ('null','$descripcion', '$nemonico', $orden)";


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