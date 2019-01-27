<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
<center>
	<table border="3">
		<thead>
			<tr>
			
				<th colspan="1"><a href="formulario.html"> Nuevo Rol	</a></th>
				<th colspan="5">Lista de Roles</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id</td>
				<td>Descripcion Rol</td>
				<td>Nemonico</td>
				<td>Orden</td>
				<td   colspan="3">Operaciones</td>
				
			</tr>
		
				
			<?php

			// Conectamos con el servidor

			include ("conexion.php");
				
			?>
			<?php
				$query = "SELECT * FROM roles";

				$resultado= mysqli_query($conexion,$query);

				while ($row=$resultado->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['idRol']; ?></td>
					<td><?php echo $row['descripcion']; ?></td>
					<td><?php echo $row['nemonico']; ?></td>
					<td><?php echo $row['orden']; ?></td>					
					</form>
					<td><a href="modificar.php?id=<?php echo $row['idRol'];?>">Modificar</a></td>
					<td><a href="eliminar.php?id=<?php echo $row['idRol'];?>">Eliminar</a></td>
				</tr>
				<?php
				}
				?>
				

		</tbody>
	</table>

				<a href="https://ayudamigrante.com/catalogo_2/index.php">Regresar</a>

		

		<!--	<a href="http://localhost/catalogo_2/index.php">Regresar</a> -->

</center>
</body>
</html>