<?php

include("conexion.php");

$ID = $_GET ['ID'];

$consultas = mysqli_query( $conexion,"SELECT * FROM usuarios WHERE idUsuarios = '$ID'") or die(mysqli_error());

	while ($rows = mysqli_fetch_array($consultas))
			{
				$id = $rows['idUsuarios'];	
				$nombre = $rows['nombre'];
				$apellidoPaterno = $rows['apellidoPaterno'];
				$apellidoMaterno = $rows['apellidoMaterno'];
				$rol = $rows['idRol'];
				$dependencia = $rows['idDependencias'];
			 }		

if (isset($_POST['modificar']))
{

	if (isset($_POST['nombre2']) && !empty($_POST['nombre2']) && 
		isset($_POST['apellidoPaterno2']) && !empty($_POST['apellidoPaterno2']) &&
		isset($_POST['apellidoMaterno2']) && !empty($_POST['apellidoMaterno2']) &&
		isset($_POST['idRol2']) && !empty($_POST['idRol2']) && 
		isset($_POST['idDependencias2']) && !empty($_POST['idDependencias2']))
	{	 	
//////////////////////////////////////////<a href="modificar.php">Regresar</a>\\\\\\\\\\\\\\\\\\\\\\\\\\\

		$nombre2 = $_POST['nombre2'];
		$apellidoPaterno2 = $_POST['apellidoPaterno2'];
		$apellidoMaterno2 = $_POST['apellidoMaterno2'];
		$idRol2 = $_POST['idRol2'];
		$idDependencias2 = $_POST['idDependencias2']; 

	mysqli_query( $conexion, "UPDATE usuarios SET nombre = '$nombre2', apellidoPaterno='$apellidoPaterno2', apellidoMaterno= '$apellidoMaterno2', idRol= $idRol2, idDependencias= $idDependencias2 WHERE idUsuarios = $ID") or die(mysql_error());

		header('refresh:1; url=modificar.php');

		echo "<p style = 'color:green;'> MODIFICACION REALIZADA CON EXITO </p>";
	}
	else
	{
		echo "error";
	}

}
?>
	
<form name="formulario"  action="" method="POST">
	<fieldset>
					
	<section>
		 <div id ="header">
	   	 <div id="logo" id="logo">  </div>
         <img src="css/logoesm.jpg">
    
      <p>Usuario:</p>
 						
 	  <label for="Nombre">Su Nombre  </label>
	  <input type="text" name="nombre2" placeholder="" value="<?php echo $nombre;  ?>" >
			<br>
			<br>

			<label for="Apellido Paterno">Apellido Paterno</label>
			<input type="text" name="apellidoPaterno2" placeholder="" value="<?php echo $apellidoPaterno;  ?>">

			<br>
			<br>

	<label for="Apellido Materno">Apellido Materno</label>
	<input type="text" name="apellidoMaterno2" placeholder="" value="<?php echo $apellidoMaterno; ?> ">	
			<br>
			<br>	
			<label for="idRol">Rol</label>
			<SELECT name="idRol2" value="<?php echo $idRol; ?>" type ="text">
				<OPTION VALUE="1">Profesor</OPTION>
				<OPTION VALUE="2">Estudiante</OPTION>
				<OPTION VALUE="3">Auxiliar</OPTION>
				<OPTION VALUE="4">Administrador</OPTION>
				<OPTION VALUE="5">Otro</OPTION>

			</SELECT>
				
			<br>
			<br>
			<label for="idDependencias">Dependencias</label>	

			<SELECT name="idDependencias2" value="<?php echo $idDependencias; ?>" type ="text">
				<OPTION VALUE="1">Direccion</OPTION>	
				<OPTION VALUE="2">Sub Administrativa</OPTION>
				<OPTION VALUE="3">Sub Academica</OPTION>
				<OPTION VALUE="4">Sub Posgrado</OPTION>
				<OPTION VALUE="5">Sub Serv Educativos</OPTION>
			</SELECT>

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



















	

