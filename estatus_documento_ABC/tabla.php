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
				<th colspan="5">Lista Estaus de Documento</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id</td>
				<td>Descripcion de Estatus</td>
				
				<td   colspan="3">Operaciones</td>
				
			</tr>
		
				
			<?php

			// Conectamos con el servidor

			include ("conexion.php");
				
			?>
			<?php
				$query = "SELECT * FROM estatus_documento";

				$resultado= mysqli_query($conexion,$query);

				while ($row=$resultado->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['idEstatus_Documento']; ?></td>
					<td><?php echo $row['descripcion']; ?></td>
										
					</form>
					<td><a href="modificar.php?id=<?php echo $row['idEstatus_Documento'];?>">Modificarrr</a></td>
					<td><a href="eliminar.php?id=<?php echo $row['idEstatus_Documento'];?>">Eliminar</a></td>
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