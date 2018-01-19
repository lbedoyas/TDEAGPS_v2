
   	<?php

	$usuario = $_POST['usuario'];
	$clave= $_POST['clave'];

		//conectar a la base de datos
	$conexion= mysqli_connect("localhost","tdeagps","tdeagps","tdeagps");


	if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}


	$consulta="SELECT * FROM registros WHERE nombre ='$usuario' and pass = '$clave'";
	$resultado=mysqli_query($conexion, $consulta);


	$filas=mysqli_num_rows($resultado);

	if($filas>0)
	{
		header("location:../vistas/principal2.php");
	}
	else
	{
		echo "Error en la autenticacion";
	}

	//esto es para librar los recursos de memoria
	mysqli_free_result($resultado);
	mysqli_close($conexion);

