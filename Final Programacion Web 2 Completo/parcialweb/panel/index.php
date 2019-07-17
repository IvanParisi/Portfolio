<!DOCTYPE html>
<?php
include_once("../seteos.php");
include_once("../funcion.php");
include_once("../arrays.php");
session_start();
if($_SESSION["usuario"]["rol"]!="admin")
{
  header("Location:../index.php?page=1");
}
?>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="ription" content="Venta de alimentos para mascotas">
    <meta name="author" content="Ivan Parisi">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Panel</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="../css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/panel.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 

  </head>

  <body>
         <a href="index.php?page=1"></a>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark colorbarra fixed-top" method="get">
        <div class="container">
         
          <a class="navbar-brand logo" href="../index.php?page=1">Dame la pata</a>
          <img src="../img/prueba.jpg" class="img-fluid|thumbnail rounded-top|rounded-right|rounded-bottom|rounded-left|rounded-circle|" alt="">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto navbar-brand">
         
              <li class="nav-item">
                <a class="nav-link" href="index.php?sec=lista">Listado de productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?sec=cargar">Cargar</a>
               
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php?page=1">Dame la pata</a>
               
              </li>
            </ul>
          </div>
         
        </div>
      </nav>
      <?php
          if(!empty($_GET["sec"]))
          {
            if($_GET["sec"]=="lista")
            {
             require_once("listado_productos.php");
            }
            elseif($_GET["sec"]=="cargar")
            {
             require_once("cargar.php");
            }
            elseif($_GET["sec"]=="editar")
            {
             require_once("editar.php");
            }
          else
          {
            require_once("../html/404.html");
          }
          }else 
          {
            require_once("listado_productos.php");
          }

?>
    <!-- Footer -->
    <footer class="py-5 bg-dark footer">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Ivan Parisi</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
