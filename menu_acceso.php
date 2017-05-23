<!DOCTYPE html>
<html>
<head>
	<title>MODULO DE INGRESO</title>
<style type="text/css">
	
	.formato{

		width: 450px;
		background-color: #819FF7;
		border-width: 1px;
		border-style: solid;
		padding: 20px, 20px, 20px, 20px;
		text-align: center;
	}	


</style>

</head>
<body>


<?php 

require('class.persona.php');
require('class.conexion.php');

$a= $_POST['opcion'];

switch ($a) {

	case '1':
		echo "Bienvenido al Modulo de Ingreso";
		echo "<br>";
		echo "<br>";
		
		?>

		<div class="formato">
		<form action="operaciones.php" method="POST">
		<br>
			<label>Ingrese el Nombre:</label>
			<br>
			<input type="text" name="nomb">
			<br><br>
			<label>Ingrese el Apellido:</label>
			<br>
			<input type="text" name= "apelli">
			<br><br>
			<label>Ingrese la cedula:</label>
			<br>
			<input type="text" name="ci">
			<br><br>
			<label>Ingrese la Carrera:</label>
			<br>
			<input type="text" name="carre">
			<br><br>
			<input type="hidden" name="sitio" value="1">
			<input type="submit" value="registrar">
			<br><br>
		</form>
		</div>



		<?php
		break;

	case '2':
		$persona= new Persona('','','','');

		$db= new Conexion();

		$db->consultar($persona);

		break;

	case '3':	

		echo "Bienvenido al Modulo de Eliminacion";
		echo "<br>";
		echo "<br>";
		
		?>

		<div class="formato">
		<form action="operaciones.php" method="POST">
		<br>
			
			<label>Ingrese la cedula:</label>
			<br>
			<input type="text" name="ci">
			<br><br>			
			<input type="hidden" name="sitio" value="2">
			<input type="submit" value="eliminar">
			<br><br>
		</form>
		</div>



		<?php
		break;
	
	case '4':
		echo "Bienvenido al Modulo de Actualizacion";
		echo "<br>";
		echo "<br>";
		
		?>

		<div class="formato">
		<form action="operaciones.php" method="POST">
		<br>
			<label>Ingrese el Nombre:</label>
			<br>
			<input type="text" name="nomb">
			<br><br>
			<label>Ingrese el Apellido:</label>
			<br>
			<input type="text" name= "apelli">
			<br><br>
			<label>Ingrese la cedula:</label>
			<br>
			<input type="text" name="ci">
			<br><br>
			<label>Ingrese la Carrera:</label>
			<br>
			<input type="text" name="carre">
			<br><br>			
			<input type="hidden" name="sitio" value="3">
			<input type="submit" value="actualizar">
			<br><br>
		</form>
		</div>



		<?php
		break;

	default:
		echo "OPCION INCORRECTA.";
		break;
}




 ?>





</body>
</html>