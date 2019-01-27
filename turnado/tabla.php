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
			
				<th colspan="1"><a href="formulario.php"> Nuevo Turnado	</a></th>
				<th colspan="5">Lista de Documentos Turnados</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id Documento Turnado</td>
				<td>Id Usuario Turnado</td>
				<td>Descripción Turnado</td>
				<td>Instrucciones Complemento</td>
				<td>Atención Normatividad</td>
				<td>Fecha Resolución</td>
				<td   colspan="3">Operaciones</td>
				
			</tr>
		
				
			<?php
/*
			// Conectamos con el servidor 

					<td><a href="modificar.php ? id=<?php echo $row['idUsuarios'];?>">Modificar</a></td>
					<td><a href="eliminar.php ? id=<?php echo $row['idUsuarios'];?>">Eliminar</a></td>


*/
			include ("conexion.php");
				
			?>
			<?php
				$query = "SELECT * FROM turnado_documentos";

				$resultado= mysqli_query($conexion,$query);

				while ($row=$resultado->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['idDocumentoTurnado']; ?></td>
					<td><?php echo $row['idUsuarioTurnado']; ?></td>
					<td><?php echo $row['descripcion_Turnado']; ?></td>
					<td><?php echo $row['instruccionesComplemento']; ?></td>
					<td><?php echo $row['atencionNormatividad']; ?></td>
					<td><?php echo $row['FechaResolucion']; ?></td>

					
					</form>
					
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