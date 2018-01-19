

<!doctype html>
<html lang="es">
  <head>
    <title>TDEAGPS !</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/estilologin.css">

    <script src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    
    <!--<script>
      $(document).ready(function(){
      $("#banner").hide().fadeIn(10000)
    });
    </script>-->

 <script src="js/push.min.js"></script>

    <script>
      Push.create('Bienvenido. Ingresa tu usuario y contraseña',{
                body: "Aplicacion TDEAGPS",
                icon: '../public/imagenes/iconopush1.png',
                timeout: 6000,
                  onClick: function () {
                  window.focus();
                  this.close();
    }
      });
    </script>


  </head>
  <body>

    <header>
            <div id="banner">
            <img src="../public/imagenes/tdea1.png" alt="" width="100%">
            </div>
          
        </header>
    
    <div class="container">
        
        <section>
          

          <div class="formulario">
            <form action="../config/validarlogin.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ingrese por favor tu correo</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo, por favor" name="usuario" autofocus>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="clave">
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Recordar contraseña
                  </label>
                </div>
                <div class="boton">
                <button type="submit" class="btn btn-primary" name="boton">Iniciar Seccion</button>
                </div>
              </form>
                        </div>

                        
          
        </section>
    </div>

    <br>
    <br>
            <footer>
          <small>Copyright © 2017 - Luis Bedoya - Derechos Reservados</small>

        </footer>


   





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>