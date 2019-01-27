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
			
				<th colspan="1"><a href="formulario.html"> Nuevo Registro	</a></th>
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
				<td   colspan="3">Operaciones</td>
				
			</tr>
		
				
			<?php

			// Conectamos con el servidor

			include ("conexion.php");
				
			?>
			<?php
				$query = "SELECT * FROM usuarios";

				$resultado= mysqli_query($conexion,$query);

				while ($row=$resultado->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['idUsuarios']; ?></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['apellidoPaterno']; ?></td>
					<td><?php echo $row['apellidoMaterno']; ?></td>
					<td><?php echo $row['idRol']; ?></td>
					<td><?php echo $row['idDependencias']; ?></td>

					
					</form>
					<td><a href="modificar.php?id=<?php echo $row['idUsuarios'];?>">Modificar</a></td>
					<td><a href="eliminar.php?id=<?php echo $row['idUsuarios'];?>">Eliminar</a></td>
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