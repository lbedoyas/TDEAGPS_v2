<?php
include ('header.php');
?>
<title>TDEAGPS - Quienes somos</title>
<!-- Este push es el mensaje que aparece en la parte superior  -->
<script>
      Push.create('Seccion de Quienes Somos.',{
                body: "Por favor ponerle un 5 a este proyecto",
                icon: '../public/imagenes/iconopush1.png',
                timeout: 6000,
                  onClick: function () {
                  window.focus();
                  this.close();
    }
      });
    </script>

</head>
<section>

	<div class="qstitulo" style="text-align: center;">
	<h1>Quienes Somos</h1>
	</div>
	<br>
	<br>
	<div class="qscontenido" style="text-align: justify; padding-right: 100px; padding-left: 100px;">
		<h2>Este es un software para la sustentacion de construccion de software 3 con el fin de sacara 5 en la realizaciòn de este proyecto de acuerdo con lo aprendido con el apreciado Profesor Luis Mosquera </h2>
	</div>

	<br>
	<br>


</section>


<?php
include ('footer.php');
?>