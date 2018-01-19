<?php
	
	require('../conexion/conexion3.php');


	$conn = mysqli_connect($host, $usuario, $clave);

	if(mysqli_connect_errno())
	{
		echo "La conexion no esta establecida<br>";
	}
	
	

	mysqli_select_db($conn, $db) or die ("<br><br>No se encuentra la base de datos");

	/*$consulta = "select * from registros";
	$r = mysqli_query($conn, $consulta);

	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{
		echo $row['id'] . "  <br>";
			echo $row['nombre'] . " <br> ";
			echo $row['apellido'] . "  <br>"; 
			echo $row['mail'] . " <br> ";
			echo $row['pass'] . " <br> ";
			echo $row['direccion'] . " <br> ";
			echo $row['celular'] . " <br> ";
			echo $row['ciudad'] . " <br> ";
			echo $row['departamento'] . " <br> ";
			echo $row['municipio'] . " <br> ";
	}
*/


	/*$consulta = "select * from tbl_alumno";
	$r = mysqli_query($conn, $consulta);

	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) //recorrer la consulta y ir almacenando en un arreglo 
														//MYSQLI_ASSOC() esto sirve para cada campo irlo almacenando en el recorrido y oblicatoriamente debe tener el primer indice en la tabla
														// ejemploecho $row['idalumno']; 
	{	

			echo $row['idalumno'] . "  <br>";
			echo $row['nombre'] . " <br> ";
			echo $row['apellido'] . "  <br>"; 
			echo $row['telefono'] . " <br> ";
			echo $row['direccion'] . " <br> ";
			echo $row['email'] . " <br> ";
			echo $row['clave'] . " <br> ";
	}*/

?>