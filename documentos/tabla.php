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
			
				<th colspan="1"><a href="formulario.php"> Nuevo Documento	</a></th>
				<th colspan="5">Lista de Documentos</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id</td>
				<td>Fecha de Registro</td>
				<td>Numero de Documento</td>
				<td>Fecha del Documento</td>
				<td>Estatus</td>
				<td>Asunto</td>
								
			</tr>
		
				
			<?php

			// Conectamos con el servidor

			include ("conexion.php");
				
			?>
			<?php
				$query = "SELECT idDocumentos,
					   fechaRegistro,
					    NumeroDocumento,
					    fechaDocumento,
					    asunto,
					     descripcion,
					   nombreDocumento
					FROM documentos ,estatus_documento
					WHERE idEstatus=idEstatus_Documento";


				$resultado= mysqli_query($conexion,$query);

				while ($row=$resultado->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['idDocumentos']; ?></td>
					<td><?php echo $row['fechaRegistro']; ?></td>
					<td><?php echo $row['NumeroDocumento']; ?></td>
					<td><?php echo $row['fechaDocumento']; ?></td>
					<td><?php echo $row['descripcion']; ?></td>
					<td><?php echo $row['asunto']; ?></td>

					
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