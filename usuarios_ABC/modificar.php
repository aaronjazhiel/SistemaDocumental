<!DOCTYPE html PUBLIC "-//W3C//DTD 	HHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xnlns="http://www.w3.org/1999/xhtml"  >
<head>
	<meta http-equiv="Content-Type"  content="text/html:"   charset="utf-8">
	<title>Catalogo Usuarios</title>
</head>
<body>

<?php 
		include("conexion.php");

		$consulta= mysqli_query($conexion, "SELECT * FROM usuarios") or die (mysql_error());
 ?>


 		<table border="3">
		<thead>
			<tr>
			
				Registro	</a></th>
				<th colspan="5">Lista de Usuarios</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id</td>
				<td>Nombre</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Rol</td>
				<td>Dependencia</td>
				<td>Modificar</td>
				
			</tr>
		</tbody>
		

<?php
			while ($row=mysqli_fetch_array($consulta))
			{
				$id=$row['idUsuarios'];	
				$nombre=$row['nombre'];
				$apellido_paterno=$row['apellidoPaterno'];
				$apellido_materno=$row['apellidoMaterno'];
				$rol=$row['idRol'];
				$dependencia=$row['idDependencias'];
			?>

			<tr>
				<td><?php echo "<p style='color:#ccc;'>".$id. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$nombre. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$apellido_paterno. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$apellido_materno. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$rol. "</p>"   ?></td>
				<td><?php echo "<p style='color:#ccc;'>".$dependencia. "</p>"   ?></td>
				
				<td> <a href="modificar_usuario.php?ID=<?php echo $id; ?>">modificar</a></td>
			</tr>

			<?php
				}
			?>
</table>
	<br>

		<a href="tabla.php">Regresar</a>


 </body>
</html>