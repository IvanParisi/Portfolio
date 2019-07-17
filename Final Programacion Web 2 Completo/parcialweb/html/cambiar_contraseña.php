<div class="container margen">

            <?php
            if(!empty($_GET["error"])):
                $error = $_GET["error"];
                
                if($error == "datos"):
                    $mensaje = "Todos los campos son obligatorios";
                elseif($error == "password"):
                    $mensaje = "La contraseña anterior no coincide";
                elseif($error == "passwordnueva"):
                    $mensaje = "No coincide la confirmacion";
                elseif($error == "misma"):
                    $mensaje = "La contraseña ingreseda es igual a la anterior";
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

<div class="row">

<div class="col-6 offset-3 margenlog">
    <form action="html/procesar_cambio.php" enctype="multipart/form-data" method="POST" class="bg-light p-3">
        <div class="form-group">
          <label>Contraseña anterior</label>
          <input type="password" name="claveold" class="form-control">
        </div>

       <div class="form-group">
    <label >Contraseña nueva</label>
    <input type="password" class="form-control" name="newclave">
  </div>

  <div class="form-group">
  
    <input type="password" class="form-control" name="newclavec" placeholder="Confirmar contraseña nueva">
  </div>
     
        <button type="submit" class="btn btn-primary">Cambiar</button>
    </form>
</div>
</div>