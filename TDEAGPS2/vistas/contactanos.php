<?php
include('header.php');
?>
<title>TDEAGPS - Contactanos</title>
<link rel="stylesheet" href="../CSS/estilocontactanos.css">

 <script>
      Push.create('Tu opinion es muy importante para nosotros!');
    </script>

</head>

<body>
	<div class="contitulo">
		<h1></h1>
	</div>

	<div class="con_contenido">
		<img src="../public/imagenes/contacto2.jpg" alt="" style="width: 100%;">
	</div>

	<br>
	<br>
	<br>


	<div class="con_formulario" style="padding-left: 100px; padding-right: 100px;">
		<form method="post" action="contactanos.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa tu nombre" name="name">
    <label for="exampleFormControlInput1">Apellido</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa tu apellido" name="lastname">
    <label for="exampleFormControlInput1">E-Mail</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa tu mail" name="email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Motivo</label>
    <select class="form-control" id="exampleFormControlSelect1" name="reason">
      <option>Motivo</option>
      <option>Propuesta</option>
      <option>Sugerencia</option>
      <option>queja</option>
      <option>Denuncia</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Dependencia</label>
    <select multiple class="form-control" id="exampleFormControlSelect2" name="dependence">
      <option>Adminsiones y registros</option>
      <option>Biblioteca</option>
      <option>Facultad de ciencias administrativas y economicas</option>
      <option>Facultad de educacion y ciencias sociales</option>
      <option>Facultad de Ingenieria</option>
      <option>Facultad de derecho y ciencias forenses</option>
      <option>Direccion Administrativa y Financiera</option>
      <option>Servicios Generales</option>
      <option>Talento Humano</option>
      <option>Archivo</option>
      <option>Direccion de planeaciòn</option>
      <option>Oficina de comunicaciones</option>
      <option>Direccion de Internacionalizacion</option>
      <option>Coordinacion de TICS</option>
      <option>Direccion de Investigacion</option>
      <option>Direccion de regionalizacion</option>
      <option>Departamento de Ciencias Basicas y Areas Comunes</option>
      <option>Coordinacion de ayudas educativas</option>
      <option>Coordinacion de egresados</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
	  </div>
	  <!--<label for="exampleFormControlInput1">Agregue un archivo</label>
	  <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Inserte un archivo" name="file">-->
	  <br>
	  <button type="submit" class="btn btn-primary" name="boton">Envio de informacion</button>
</form>
	</div>


  <?php

    if(isset($_POST['boton']))
    {
        include '../conexion/conexion3.php';
        require_once('../config/validacion1.php');
        $nombre = $_POST['name'];
        $apellido = $_POST['lastname'];
        $correo = $_POST['email'];
        $motivo = $_POST['reason'];
        $dependencia = $_POST['dependence'];
        $descripcion = $_POST['description'];
        

        $conn->query("INSERT INTO contactanos (nombre,apellido,email,motivo,dependencia,descripcion) VALUES ('$nombre','$apellido','$correo','$motivo','$dependencia','$descripcion')");
        mysqli_close($conn);

        echo "<script> alert('Informacion Adicionada a la base de datos');</script>";
    }

  ?>

</body>




<?php
include('footer.php');
?>