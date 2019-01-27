
<!DOCTYPE>

<html>
<head>
	<title>Alta Dependencia</title>
</head>
<body>



<?php	
			// Conectamos con el servidor

			include ("conexion.php");
	
// Obtenemos los valores del Formulario

$descripcion=$_POST['descripcion'];

// Armamos la sentencia de SQL

$insertar="INSERT INTO dependencias VALUES ('null','$descripcion')";


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