
<!DOCTYPE>

<html>
<head>
	<title>Alta Documento Turnado </title>
</head>
<body>

<?php	
			// Conectamos con el servidor
		include ("conexion.php");

// Obtenemos los valores del Formulario
$idDocumentoTurnado=$_POST['NumeroDocumento'];
$idUsuarioTurnado=$_POST['idUsuarioTurnado'];
$descripcion=$_POST['descripcion'];
$instruccionesComplemento=$_POST['instruccionesComplemento'];
$atencionNormatividad=$_POST['atencionNormatividad'];
$FechaResolucion=$_POST['FechaResolucion'];

echo "$idDocumentoTurnado";
echo "$idUsuarioTurnado";
echo "$descripcion";
echo "$instruccionesComplemento";
echo "$atencionNormatividad";
echo "$FechaResolucion";
// Armamos la sentencia de SQL

$insertar="INSERT INTO turnado_documentos VALUES ('$idDocumentoTurnado',
													'$idUsuarioTurnado',
													'$descripcion',
												    '$instruccionesComplemento',
											        '$atencionNormatividad',
												    '$FechaResolucion')";


// Ejecutamos la sentencia de sql

$resultado=mysqli_query($conexion,$insertar)
		or die("error al insertar el registro");
// Verificamos la ejecución 
//echo "Datos guardados correctamente <br><a href='tabla.php'>Volver</a>";

mysqli_close($conexion);

header("Location: tabla.php");
	//echo "Datos guardados correctamente <br><a href='index.html'>Volver</a>";

?>


</body>
</html>