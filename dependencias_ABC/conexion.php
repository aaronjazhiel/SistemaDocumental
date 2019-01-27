<?php
$conexion= @mysqli_connect('ayudamigrante.com','ayudamig','Oilef_french_4250','ayudamig_gestordocumental'); //or die('No se pudo conectar al servidor ' );

if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}
?>


<!--    <?php
//$conexion= mysqli_connect('localhost','root','','gestordocumental'); //or die('No se pudo conectar al servidor ' );

//if ($conexion->connect_errno) {
//	    echo "Nuestro sitio experimenta fallos....";
//	    exit();
//	}
?> -->