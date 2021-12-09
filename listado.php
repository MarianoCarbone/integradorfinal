<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="estilo2.css" rel="stylesheet">
    <title>Formulario de registros</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light col-sm-12" style="background-color:rgb(73, 73, 73)">
        <div class="container-fluid"> 
        <a class="navbar-brand" style="color: white;" href="#"><img src="Cinema Buenos Aires.png" alt="" width="10%"> Cinema Buenos Aires</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
              </button>
            <div class="d-flex">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:rgb(255, 0, 21);" href="listado.php">Usuarios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: gray;" href="#">El lugar y la fecha</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: rgb(73, 255, 1);" href="registros.php">Registro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:greenyellow;" href="tickets.html">Comprar tickets</a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
      </nav>
      <div class="textocentral">
        <div class="text-center">
            
            <h2 class="title">LISTADO DE USUARIOS REGISTRADOS</h2>
        </div>
      </div>

    <div class="d-flex justify-content-center">
        <div class="col-sm-6  ">

                  <?php

                  include 'conexion.php';

                      echo "<br>";
                      echo "<br>";
                      echo "<br>";

                      $consultastodos="SELECT * FROM registros";
                      
                      $consultas=mysqli_query($conexion, $consultastodos);
                    
                      while($listadoArray=mysqli_fetch_array($consultas))
                      {
                          echo $listadoArray['id_usuario'];
                          echo " | ";
                          echo $listadoArray['nombre'];
                          echo " | ";
                          echo $listadoArray['apellido'];
                          echo " | ";
                          echo " | ";
                          echo $listadoArray['dni'];
                          echo " | ";
                          echo $listadoArray['email'];
                          echo"<br>";

                      }
                      mysqli_close($conexion);
                  ?>
                  <form action="index.php">
                            <div class="col-md-6 col-sm-6 col-lg-6 p-1">
                                <button class="btn btn-success w-100" type="submit"> Volver a inicio </button>
                            </div>
                  </form>
        </div>
    </div>

            <footer>

                <div class="d-flex justify-content-center">
                  <div class="foot">
              
                    <div class="c1">
                      <a style=" color:white; text-decoration: unset;"href="#">Preguntas frecuentes</a>
                    </div>
              
                    <div class="c2">
                      <a style="color:white; text-decoration: unset;" href="#">Contáctenos</a>
                    </div>
              
                    <div class="c3">
                      <a style="color:white; text-decoration: unset;"href="#">Prensa</a>
                    </div> 
                    
                    <div class="4">
                      <a style="color:white;text-decoration: unset;"href="#">Conferencias</a>
                    </div>
              
                    <div class="c5">
                      <a style="color:white; text-decoration: unset;" href="#">Términos y condiciones</a>
                    </div>
              
                    <div class="c6">
                      <a style="color:white;text-decoration: unset;"href="#">Privacidad</a>
                    </div>
              
                    <div class="c7">
                      <a style="color:white;text-decoration: unset;"href="#">Estudiantes</a>
                    </div>
              
                  </div>
                </div> 
              </footer>
</body>

</html>