<?php
if(!isset($_SESSION["login"])):
    header("Location:index.php?page=5");
endif;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cargar</title>
</head>
<body>

<div class="container">
         
<?php
            if(!empty($_GET["error"])):
                $error = $_GET["error"];
                
                if($error == "faltadata"):
                    $mensaje = "Todos los campos son obligatorios";
                elseif($error == "imagen"):
                    $mensaje = "No es una imagen valida";
                elseif($error == "formato"):
                  $mensaje = "No es un Formato de imagen valido";
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
    <div class="row margencar">

        <div class="col-6 offset-3">
            <form action="html/procesar_carga.php" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                <div class="form-group">
                  <label for="nombre">Nombre de su mascota</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Felini" maxlength="20">
                </div>

                <div class="form-group">
                  <label for="descripcion">Cuentenos de su mascota</label>
                  <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion" maxlength="220"></textarea>
                </div>
         
                <div class="form-group">
                  <label for="imagen">Suba una foto!</label>
    
                  <input type="file" accept="image/jpeg,image/png" class="form-control-file" name="imagen" id="imagen" placeholder="" aria-describedby="help_imagen">
                  <small id="help_imagen" class="form-text text-muted">La foto de su mascota debe ser de formato jpg o png y pesar menos de 2mb</small>
                </div> 
               
                
                  
                  
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
            
        </div>
        
    </div>
    
</div>

</body>
</html>


