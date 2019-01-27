<?php

include("conexion.php");

$ID = $_GET ['ID'];

$consultas = mysqli_query( $conexion,"SELECT * FROM roles WHERE idRol = '$ID'") or die(mysqli_error());

	while ($rows = mysqli_fetch_array($consultas))
			{
				$id=$rows['idRol'];	
				$descripcion=$rows['descripcion'];
				$nemonico=$rows['nemonico'];
				$orden=$rows['orden'];
				
			 }		

if (isset($_POST['modificar']))
{

	if (isset($_POST['descripcion2']) && !empty($_POST['descripcion2']) && 
		isset($_POST['nemonico2']) && !empty($_POST['nemonico2']) &&
		isset($_POST['orden2']) && !empty($_POST['orden2']))
		
	{	 	
//////////////////////////////////////////<a href="modificar.php">Regresar</a>\\\\\\\\\\\\\\\\\\\\\\\\\\\

		$descripcion2 = $_POST['descripcion2'];
		$nemonico2 = $_POST['nemonico2'];
		$orden2 = $_POST['orden2'];
		

	mysqli_query( $conexion, "UPDATE roles SET descripcion = '$descripcion2', nemonico='$nemonico2', orden= '$orden2' WHERE idRol = $ID") or die(mysql_error());

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
    
      <p>Rol:</p>
 						
 	  <label for="Nombre">Rol:  </label>
	  <input type="text" name="descripcion2" placeholder="" value="<?php echo $descripcion;  ?>" >
			<br>
			<br>

			<label for="nemonico">Nemonico</label>
			<input type="text" name="nemonico2" placeholder="" value="<?php echo $nemonico;  ?>">

			<br>
			<br>

	<label for="orden">Orden</label>
	<input type="text" name="orden2" placeholder="" value="<?php echo $orden; ?> ">	
			<br>
			<br>	
			
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








