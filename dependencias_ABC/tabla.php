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
				<th colspan="5">Lista de Dependencias</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id</td>
				<td>Dependencia</td>
				
				<td   colspan="3">Operaciones</td>
				
			</tr>
		
				
			<?php

			// Conectamos con el servidor

			include ("conexion.php");
				
			?>
			<?php
				$query = "SELECT * FROM dependencias";

				$resultado= mysqli_query($conexion,$query);

				while ($row=$resultado->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['idDependencias']; ?></td>
					<td><?php echo $row['descripcion']; ?></td>
										
					</form>
					<td><a href="modificar.php?id=<?php echo $row['idDependencias'];?>">Modificar</a></td>
					<td><a href="eliminar.php?id=<?php echo $row['idDependencias'];?>">Eliminar</a></td>
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