<?php
 include_once("seteos.php");
 include_once("arrays.php");
 include_once("funcion.php");
 session_start();


?>

<!DOCTYPE html>

<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="ription" content="Venta de alimentos para mascotas">
    <meta name="author" content="Ivan Parisi">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>DameLaPata</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 

  </head>

  <body>
         <a href="index.php?page=1"></a>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark colorbarra fixed-top" method="get">
        <div class="container">
         
          <a class="navbar-brand logo" href="index.php?page=1">Dame la pata</a>
          <img src="img/prueba.jpg" class="img-fluid|thumbnail rounded-top|rounded-right|rounded-bottom|rounded-left|rounded-circle|" alt="">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto navbar-brand">
          
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=1">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=2">Productos</a>
                </li>
                 <li class="nav-item">
                <a class="nav-link" href="index.php?page=3">Contacto</a>
                </li>
                  <li class="nav-item">
                <a class="nav-link" href="index.php?page=4">Galeria</a>
                </li>
                  <li class="nav-item pepe" >
               
                </li>
              
            
    
            </ul>
            <?php
            if(!isset($_SESSION["login"])):
            ?>
            <ul class="navbar-nav  navbar-brand">
              <li class="nav-item">
              <a href="index.php?page=5" class="nav-link">Registro</a>
             
              </li>
              <li class="nav-item">
              <a href="index.php?page=6" class="nav-link">Ingresar</a></li>
              </ul>
            
            <?php
            endif;
            if(isset($_SESSION["login"])):
            ?>
            <ul class="navbar-nav   navbar-brand">
            <li class="nav-item mr-5 dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $_SESSION["usuario"]["usuario"]?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php
          if($_SESSION["usuario"]["rol"]=="admin"):
          ?>
          <a class="dropdown-item" href="panel/index.php">Ir al panel</a>
          <a class="dropdown-item" href="index.php?page=9">Gestionar Galeria</a>
          <?php
          endif;
          ?>
        <?php
         if($_SESSION["usuario"]["rol"]=="usuario"):
        ?>
         <a class="dropdown-item" href="index.php?page=9">Mis fotos</a>
         <?php
         endif;
         ?>
         <a class="dropdown-item" href="index.php?page=7">Cambiar contraseña</a>
          <a class="dropdown-item" href="html/logout.php">Cerrar sesiòn</a>
       
        </div>
      </li>
            
             
            </ul>
              <?php
              endif;
              ?>
          </div>
         
        </div>
      </nav>
<?php
if(!empty($_GET["si"])):
    $ok = $_GET["si"];
    if($ok == "ok"):
      $mensaje = "Se cambio la contraseña correctamente";
    else:
      $mensaje = "";
    endif;
?>
  <div class="alert alert-success alert-dismissible fade show margen" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Listo! </strong> <?= $mensaje ?>.
                </div>
      <?php

  endif;

      if(!empty($_GET["page"]))
      {
        if($_GET["page"]==1)
        {
         require_once("html/inicio.php");
        }
        if($_GET["page"]==2)
        {
         require_once("html/productos.php");
        }
        if($_GET["page"]==3)
        {
         require_once("html/contacto.php");
        }
        if($_GET["page"]==4)
        {
         require_once("html/galeria.php");
        }
        if($_GET["page"]==5)
        {
         require_once("html/registro.php");
        }
        if($_GET["page"]==6)
        {
         require_once("html/login.php");
        }
        if($_GET["page"]==7)
        {
         require_once("html/cambiar_contraseña.php");
        }
        if($_GET["page"]==8)
        {
         require_once("html/cargar_galeria.php");
        }
        if($_GET["page"]==9)
        {
         require_once("html/mis_fotos.php");
        }
        if($_GET["page"]==10)
        {
         require_once("html/editar_foto.php");
        }
    
      }else 
      {
        require_once("html/inicio.php");
      }
      if(!empty($_GET["page"]))
      {
        if($_GET["page"]>=11  || $_GET["page"]<=0)
        {
          require_once("html/404.html");
         }
      }else 
      {
        require_once("html/inicio.php");
      }
    


      ?>
    


    <!-- Footer -->
    <footer class="py-5 bg-dark footer ">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Ivan Parisi</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
