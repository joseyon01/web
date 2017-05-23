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
<form action="menu_acceso.php" method="POST" accept-charset="utf-8">
	<label>SELECCIONE UNA OPCION:</label>
	<select name="opcion">
		<option value="1">INSERTAR</option>
		<option value="2">BUSCAR</option>
		<option value="3">ELIMINAR</option>
		<option value="4">ACTUALIZAR</option>		
	</select>
	<br><br>
	
	<center>
	<input type="submit" value="Enviar">
	</center>
</form>
</div>


</body>
</html>