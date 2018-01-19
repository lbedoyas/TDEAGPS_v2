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
	<div class="admin_contenido" style="width: 80%; ">
		<form action="administracion.php" method="POST">
      <div class="form-group">
    <label for="inputAddress">Cedula</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese por favor su numero de cedula" required autofocus name="cedula">
  </div>
  <div class="form-row">
  	 <div class="form-group col-md-6">
      <label>Nombre</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese su nombre" name="name">
    </div>
    <div class="form-group col-md-6">
      <label>Apellido</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Ingrese su apellido" name="lastname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="mail">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese la direccion de domicilio" name="address">
  </div>

  <div class="form-group">
    <label for="inputAddress2">Celular</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Ingresa tu numero celular" name="phone">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity" name="city" placeholder="Ingrese por favor la ciudad">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Departamento</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Elige una opcion...</option>
        <option>Antioquia</option>
        <option>Cordoba</option>
        <option>Cundinamarca</option>
        <option>Manizales</option>
        <option>Valle del cauca</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Municipio</label>
      <input type="text" class="form-control" id="inputZip" name="condado">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" name="boton">Enviar</button>
</form>
	</div>

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
        mysqli_close($conn);
        echo "<script> alert('Informacion Adicionada a la base de datos');</script>";


    }

?>

</body>
<?php
include('footer.php');
?>