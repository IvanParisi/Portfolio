

<body>



  <div id="fullscreen_bg" class="fondo">
   <div class="row">

<div class="col-6 offset-3 margenlog">
    <form action="html/procesar_login.php" enctype="multipart/form-data" method="POST" class="bg-light p-3">
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>

       <div class="form-group">
    <label >Contraseña</label>
    <input type="password" class="form-control" name="clave">
  </div>
     
        <button type="submit" class="btn btn-primary">Iniciar</button>
    </form>
    <div class="container ">

<?php
if(!empty($_GET["error"])):
    $error = $_GET["error"];
    
    if($error == "datos"):
      $mensaje = "Los campos email y password son obligatorios.";
    elseif($error == "email_no_existe"):
        $mensaje = "El email ingresado no existe";
    elseif($error == "password"):
        $mensaje = "La contraseña ingresada es incorrecta";
    else:
        $mensaje = "";
    endif;
    
?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Error: </strong> <?= $mensaje ?>.
    </div>

<?php
endif;

?>
</div>
</div>

</div>


  </body>
</html>