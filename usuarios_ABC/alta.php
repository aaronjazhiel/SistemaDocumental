
<!DOCTYPE>

<html>
<head>
	<title>Alta registro</title>
</head>
<body>



<?php	
			// Conectamos con el servidor

			include ("conexion.php");
	
// Obtenemos los valores del Formulario

$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellidoPaterno'];
$apellido_materno=$_POST['apellidoMaterno'];
$rol=$_POST['idRol'];
$dependencia=$_POST['idDependencias'];

// Armamos la sentencia de SQL

$insertar="INSERT INTO usuarios VALUES ('null','$nombre',
									    '$apellido_paterno',
								        '$apellido_materno',
									    '$rol',
									    '$dependencia')";


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