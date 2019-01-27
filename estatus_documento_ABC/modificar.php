<!DOCTYPE html PUBLIC "-//W3C//DTD 	HHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xnlns="http://www.w3.org/1999/xhtml"  >
<head>
	<meta http-equiv="Content-Type"  content="text/html:"   charset="utf-8">
	<title>Catalogo Estatus</title>
</head>
<body>

<?php 
		include("conexion.php");

		$consulta= mysqli_query($conexion, "SELECT * FROM estatus_documento") or die (mysql_error());
 ?>


 		<table border="3">
		<thead>
			<tr>
			
				Registro	</a></th>
				<th colspan="5">Lista Estaus de Documento</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id</td>
				<td>Descripcion Estatus de Documento</td>
				<td>Modificar</td>
				
			</tr>
		</tbody>
		

<?php
			while ($row=mysqli_fetch_array($consulta))
			{
				$id=$row['idEstatus_Documento'];	
				$nombre=$row['descripcion'];
				
			?>

			<tr>
				<td><?php echo "<p style='color:#ccc;'>".$id. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$nombre. "</p>"   ?></td>
				
				
				<td> <a href="modificar_estatus.php?ID=<?phpecho$id;?>">modificarr</a></td>
			</tr>

			<?php
				}
			?>
</table>
	<br>

		<a href="tabla.php">Regresar</a>


 </body>
</html>