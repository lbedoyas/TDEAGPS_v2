<!-- Version 2 -->

<?php
include ('header.php');
?>
<title>TDEA - Administracion</title>
<link rel="stylesheet" href="../CSS/">
</head>
<body>
	<br>
	<div class="admin_titulo" style="text-align: center;">
		<h1>Administracion de usuarios</h1>
	</div>	
	<br>
	<br>
	<center>
	<form action="administrador1.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Cedula</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Por favor ingresar su cedula" name="cedula">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</center>


  <?php
    if(isset($_POST['boton']))
    {
        include '../conexion/conexion3.php';
        require_once('../config/validacion1.php');
        $id = $_POST['cedula'];
        $nombre = $_POST['name'];
        $apellido = $_POST['lastname'];
        $email = $_POST['mail'];
        $clave= $_POST['pass'];
        $dir=$_POST['address'];
        $celular=$_POST['phone'];
        $ciudad=$_POST['city'];
        $departamento = $_POST['state'];
        $municipio = $_POST['condado'];

        $conn->query("INSERT INTO registros (id,nombre,apellido,mail,pass,direccion,celular,ciudad,departamento,municipio) VALUES ('$id','$nombre','$apellido','$email','$clave','$dir','$celular','$ciudad','$departamento','$municipio')");
        //mysqli_query($conexion);
        mysqli_close($conexion);
        echo "Informacion Adicionada a la base de datos";


    }

?>

</body>
<?php
include('footer.php');
?>