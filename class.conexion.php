<?php 

/**
* 
*/
//require('class.persona.php');
//clase para la conexion a la base de datos
class Conexion extends mysqli
{
	
	public function __construct()
	{
		parent::__construct('localhost','root','123','ula');

		$this->query("SET_NAME 'utf8';");

		if($this->connect_errno){
			echo "error en la conexion a la base de datos";

		}

		else{

			$x= "conexion exitosa a la base de datos";

			//echo $x;

			unset($x);

		}


	}


//$db = new Conexion();
	
	public function insertar($persona){

		$persona->ced;

		$db = new Conexion();

		$recorrer= $db->query("SELECT * FROM alumnos WHERE cedula = '$persona->ced';");

		if(mysqli_num_rows($recorrer) > 0){

			echo"no hago la actualizacion porque el registro existe";
			echo "<br>";
			echo "<br>";

			echo "<a href='inicio.php'>Volver a Inicio</a>";

		}

		else{

			$sql= "INSERT INTO alumnos (nombre, apellido, cedula, carrera) VALUE ('$persona->nom', '$persona->ape', '$persona->ced', '$persona->car');";
		

			$db->query($sql);

			echo "registro insertado";
			echo "<br>";
			echo "<br>";

			echo "<a href='inicio.php'>Volver a Inicio</a>";
		}

		


	}


	public function consultar($persona){

		$db = new Conexion();		

		$recorrer= $db->query("SELECT * FROM alumnos;");

		echo "<table>";  
		echo "<tr>";  
		echo "<th>Nombre</th>";  
		echo "<th>Apellido</th>";  
		echo "<th>Cedula</th>";
		echo "<th>Carrera</th>";
		echo "</tr>";

		while ($row= mysqli_fetch_array($recorrer)){

			echo "<tr>";  
		    echo "<td>" . $row['nombre'] . "</td>";  
		    echo "<td>" . $row['apellido'] . "</td>";  
		    echo "<td>" . $row['cedula'] . "</td>";  
		    echo "<td>" . "<center>" . $row['carrera'] . "</center>" . "</td>";
		    echo "</tr>";

		}

		echo "</table>";

		echo "<br>";
		echo "<br>";

		echo "<a href='inicio.php'>Volver a Inicio</a>";

	}


	public function eliminar($persona){

		$db = new Conexion();

		echo $persona->ced;

		$recorrer= $db->query("SELECT * FROM alumnos WHERE cedula = '$persona->ced';");

		if(mysqli_num_rows($recorrer) > 0){

			

			$sql= "DELETE FROM alumnos WHERE cedula = '$persona->ced';";

			$db->query($sql);

			echo "registro eliminado";

			echo "<br>";
			echo "<br>";

			echo "<a href='inicio.php'>Volver a Inicio</a>";

			

		}

		else{

			echo"El registro no existe. No hay datos para eliminar";

			echo "<br>";
			echo "<br>";

			echo "<a href='inicio.php'>Volver a Inicio</a>";

		}

		

	}


	public function actualizar($persona){

		$db = new Conexion();

		$recorrer= $db->query("SELECT * FROM alumnos WHERE cedula = '$persona->ced';");

		if(mysqli_num_rows($recorrer) > 0){

			$recorrer= $db->query("UPDATE alumnos SET nombre= '$persona->nom', apellido = '$persona->ape', carrera= '$persona->car' WHERE cedula= '$persona->ced';");

			echo "<br>";
			echo "<br>";

			echo "EL REGISTRO HA SIDO ACTUALIZADO";
			echo "<br>";
			echo "<br>";
			echo "<a href='inicio.php'>Volver a Inicio</a>";

		}

		else{

			echo"no hago la actualizacion porque el registro no existe";

			echo "<br>";
			echo "<br>";

			echo "<a href='inicio.php'>Volver a Inicio</a>";
		}



	}


}
 ?>