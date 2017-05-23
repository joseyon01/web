<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>

	<style>

	#estilo{
	width: 450px;
	background-color: #819FF7;
	border-width: 2px;
	border-style: solid;
	padding: 20px 20px 20px 20px

	}



	</style>
</head>
<body>
<div id="estilo">
<form action="prueba.php" method="POST" accept-charset="utf-8">
	<label>SELECCIONE UNA OPCION:</label>
	<select name="opcion">
		<option value="1">INSERTAR</option>
		<option value="2">BUSCAR</option>
		<option value="3">ELIMINAR</option>
		<option value="4">ACTUALIZAR</option>		
	</select>
	<br><br><br>
	<a href= "prueba.php">Registrarme </a>
	<center>
	<input type="submit" name=Ok value="enviar">
	</center>
</form>
</div>
<br><br><br><br><br><br><br><br>
<?php

$selected_val = $_POST['opcion']; 

echo $selected_val;


  ?>
</body>
</html>