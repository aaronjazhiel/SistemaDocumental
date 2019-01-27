<!DOCTYPE html PUBLIC "-//W3C//DTD 	HHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xnlns="http://www.w3.org/1999/xhtml"  >
<head>
	<meta http-equiv="Content-Type"  content="text/html:"   charset="utf-8">
	<title>Catalogo Roles</title>
</head>
<body>

<?php 
		include("conexion.php");

		$consulta= mysqli_query($conexion, "SELECT * FROM roles") or die (mysql_error());
 ?>


 		<table border="3">
		<thead>
			<tr>
			
				Modifica	</a></th>
				<th colspan="5">Lista de Roles</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id</td>
				<td>Descripción Rol</td>
				<td>Nemonico del Rol</td>
				<td>Orden</td>
				<td>Modificar</td>
				
			</tr>
		</tbody>
		

<?php
			while ($row=mysqli_fetch_array($consulta))
			{
				$id=$row['idRol'];	
				$descripcion=$row['descripcion'];
				$nemonico=$row['nemonico'];
				$orden=$row['orden'];
				
			?>

			<tr>
				<td><?php echo "<p style='color:#ccc;'>".$id. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$descripcion. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$nemonico. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$orden. "</p>"   ?></td>
								
				<td> <a href="modificar_roles.php?ID=<?php echo $id; ?>">modificar</a></td>
			</tr>

			<?php
				}
			?>
</table>
	<br>

		<a href="tabla.php">Regresar</a>


 </body>
</html>