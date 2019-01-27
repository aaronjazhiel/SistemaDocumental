<!DOCTYPE html>
<html>
<head>
	<title>Formulario Turnado de Documentos</title>
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
		
			<label for =" documentosTurnados">Seleccione el documento por favor:</label>

			<?php
		     include ("conexion.php");
				
			
			$sentencia= "SELECT * FROM  documentos";

			$query = mysqli_query($conexion, $sentencia);
									
			?>

			<SELECT name="NumeroDocumento" required>
			<tr>
																								
		<?php while ($arreglo = mysqli_fetch_array($query)) { ?>

					<?php  $id = $arreglo['NumeroDocumento']; ?>
				
			<OPTION required VALUE="<?php echo $arreglo['NumeroDocumento']?>"><?php echo $arreglo['NumeroDocumento']?></OPTION>


			<?php
			$id = $_GET ['$id'];
			$idDocumentoTurnado=$id;  ?>

			<?php } ?>

			<?php mysqli_free_result($query);
					  ?>
			

			<br>
			<br>

			<label for="idUsuarios">Usuarios</label>
			<?php

			

			$sentencia= "SELECT FROM usuarios 
	idUsuarios,
    nombre,
    apellidoPaterno,
    apellidoMaterno";
  

	 
    	



			$query = mysqli_query($conexion, $sentencia);
									
			?>

			
               <SELECT name="idUsuarioTurnado" required>
			<tr>
																								
			<?php while ($arreglo = mysqli_fetch_array($query)) { ?>
				

						<?php  $id = $arreglo['idUsuarios']; ?>
				<?php echo $arreglo['idUsuarios']?>">
					
				
			<OPTION required VALUE="<?php echo $arreglo['idUsuarios']?>"><?php echo $arreglo[" nombreCompleto"]?></OPTION>


			<?php/*
			$id=$_GET ['$id']
			$idUsuarioTurnado=$id;*/  ?>

		<?php } ?>
											
			</SELECT>



					
			</tr>






			<label for="descripcion">Descripción</label>
			
			<input type="text" name="descripcion" placeholder="DEscripción" required>

			<p>Instrucciones Complemento</p>
			<label for="instruccionesComplemento"> </label>
			
			<textarea name="instruccionesComplemento" placeholder="Instrucciones Complemento" required></textarea>

			<br>
			<br>

			<label for="atencionNormatividad">Atencion Normatividad</label>
			
			<input type="text" name="atencionNormatividad" placeholder="Atencion Normatividad" required>
			<br>
			<br>

			<label for="Fecha">Fecha de Resolución</label>
			
			<input type="Fecha" name="FechaResolucion" placeholder="Fecha de Resolución" required>

			<br>
			<br>

				<leaf>
		      <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
		      	<br>
				<br>
				<a href="tabla.php">Regresar</a>
		      
		    </leaf>

			</section>
			</fieldset>



					<?php mysqli_close("conexion.php"); ?>
		</form>
		
	</div>
</body>
</html>