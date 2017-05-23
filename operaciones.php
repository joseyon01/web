<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

require('class.persona.php');
require('class.conexion.php');

$a= $_POST['sitio'];

//echo "la opcion seleccionada es:" . $a;

echo "<br>";


if ($a== "1") {

		$para1= $_POST['nomb'];
		$para2= $_POST['apelli'];
		$para3= $_POST['ci'];
		$para4= $_POST['carre'];
		$persona= new Persona($para1,$para2,$para3,$para4);

		$db= new Conexion();

		$db->insertar($persona);
}

elseif ($a== "2") {
	
	$para3= $_POST['ci'];

	$persona= new Persona('','',$para3,'');

	$db= new Conexion();

	$db->eliminar($persona);

}

elseif($a== "3"){

		$para1= $_POST['nomb'];
		$para2= $_POST['apelli'];
		$para3= $_POST['ci'];
		$para4= $_POST['carre'];
		$persona= new Persona($para1,$para2,$para3,$para4);

		$db= new Conexion();

		$db->actualizar($persona);

}

else {

	echo "NINguna de las anteriores";
}





 ?>







</body>
</html>