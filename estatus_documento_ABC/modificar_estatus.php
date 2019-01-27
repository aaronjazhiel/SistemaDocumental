<?php

include("conexion.php");

$ID = $_GET ['ID'];

$consultas = mysqli_query( $conexion,"SELECT * FROM estatus_documento WHERE idEstatus_Documento = '$ID'") or die(mysqli_error());

	while ($rows = mysqli_fetch_array($consultas))
			{
				$id = $rows['idEstatus_Documento'];	
				$descripcion = $rows['descripcion'];
				
			 }		

if (isset($_POST['modificar']))
{

	if (isset($_POST['descripcion2']) && !empty($_POST['descripcion2']))
	{	 	
//////////////////////////////////////////<a href="modificar.php">Regresar</a>\\\\\\\\\\\\\\\\\\\\\\\\\\\

		$descripcion2 = $_POST['descripcion2'];
		
	mysqli_query( $conexion, "UPDATE estatus_documento SET descripcion = '$descripcion2' WHERE idEstatus_Documento = $ID") or die(mysql_error());

		header('refresh:1; url=modificar.php');

		echo "<p style = 'color:green;'> MODIFICACION REALIZADA CON EXITO </p>";
	}
	else
	{
		echo "#### Aquí hay error";
	}

}
?>
	
<form name="formulario"  action="" method="POST">
	<fieldset>
					
	<section>
		 <div id ="header">
	   	 <div id="logo" id="logo">  </div>
         <img src="css/logoesm.jpg">
    
      <p>Descripcion Estatus Documento:</p>
 						
 	  <label for="nombre">Descripcion Estatus Documento  </label>
	  <input type="text" name="descripcion2" placeholder="" value="<?php echo $descripcion;  ?>" >
			<br>
			<br>

			
			<leaf>
		      <input type="submit" value="Modificar"  name="modificar">

		     </leaf>
					
 	</section>
	</fieldset>
</form>

<br/>

<a href="tabla.php">Regresar</a>

</body>
</html>



















