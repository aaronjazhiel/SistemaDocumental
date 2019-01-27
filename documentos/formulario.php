<!DOCTYPE html>
<html>
<head>
	<title>Formulario Registro de Documentos</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script >
		function validacion (id){
			var elem=document.getElementsById('id');
		}
	</script>
</head>
<body>
	<div class="form">
		<form name="Registro"  action="alta.php" method="POST">
			<fieldset>
				<legend></legend>
			
		     <section>
			<br>
			<br>
								
			<label for="Fecha">Fecha de Registro</label>
			
			<input type="Fecha" name="fechaRegistro" placeholder="Fecha de Registro" required>
			<br>
			<br>

			<label for="NumeroDocumento">Numero de Documento</label>
			
			<input type="text" name="NumeroDocumento" placeholder="Numero de Documento" required>
			<br>
			<br>

			<label for="fechaDocumento">Fecha del Documento</label>
			
			<input type="fechaDocumento" name="fechaDocumento" placeholder="Fecha del Documento" required>
			<br>
			<br>
			<label for="idEstatus">Estutus Documento</label>
					
			<?php

			include ("conexion.php");

			$sentencia= "SELECT * FROM  estatus_documento";

			$query = mysqli_query($conexion, $sentencia);
									
			?>

			<SELECT name="idEstatus" required>
			<tr>
																								
		<?php while ($arreglo = mysqli_fetch_array($query)) { ?>

					<?php  $id = $arreglo['idEstatus_Documento']; ?>
				
			<OPTION required VALUE="<?php echo $arreglo['idEstatus_Documento']?>"><?php echo $arreglo['descripcion']?></OPTION>


			<?php
			$id = $_GET ['$id'];
			$idEstatus=$id;  ?>

		<?php } ?>
											
			</SELECT>
					
			</tr>
				 			
			<p>Asunto:</p>
			<label for="asunto"></label>
			<textarea name="asunto" placeholder="Asunto" required></textarea>

			<td> <a href="alta.php?ID=<?php echo $id; ?>"></a></td>
				<leaf>
		      <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
				<a href="tabla.php">Regresar</a>
		      
		    </leaf>

			</section>
			</fieldset>

		</form>
		
	</div>
	
</body>
</html>