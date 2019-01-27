<?php

$id=$_GET['id'];



$conexion= @mysqli_connect('ayudamigrante.com','ayudamig','Oilef_french_4250','ayudamig_gestordocumental'); //or die('No se pudo conectar al servidor ' );

if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}


$registros=mysqli_query($conexion, "select idEstatus_Documento from estatus_documento

                        where idEstatus_Documento='$id'") or 

  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  mysqli_query($conexion,"DELETE FROM estatus_documento WHERE idEstatus_Documento='$id' ") or die("Problemas en el select:".mysqli_error($conexion));
  echo "Se efectuó el borrado del registro con dicho ID.";
  header("Location: tabla.php");
}
else
{
  echo "No existe un registro con ese ID.";
}
mysqli_close($conexion);
?>

