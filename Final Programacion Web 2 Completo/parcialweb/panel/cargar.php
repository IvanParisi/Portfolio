<?php

if($_SESSION["usuario"]["rol"]!="admin" && isset($_POST["sec"]))
{
    session_start();
  header("Location:../index.php?page=1");
}
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
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="center-block">Nuevo Producto</h1>
        </div>
    </div>
</div>
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
                elseif($error == "masdeuno"):
                  $mensaje = "Solo se puede marcar un tipo de producto!";
                elseif ($error == "ingresotexto"):
                  $mensaje = "Ingeso texto en el precio";
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
    <div class="row">

        <div class="col-6 offset-3">
            <form action="procesos/cargar_producto.php" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre">
                </div>

                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion"></textarea>
                  <small id="help_descripcion" class="text-muted">Debe ser la descripción completa</small>
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" min="0" class="form-control" id="precio"> 
                 
                </div>
         
                <div class="form-group">
                  <label for="imagen">Foto</label>
    
                  <input type="file" accept="image/jpeg,image/png" class="form-control-file" name="imagen" id="imagen" placeholder="" aria-describedby="help_imagen">
                  <small id="help_imagen" class="form-text text-muted">La imágen del producto debe ser en formato jpg o png y pesar menos de 2mb</small>
                </div> 
                <label for="precio">Tipo de producto</label>
                <div class="form-check">
                    <label class="form-check-label">
                    
                      <input type="checkbox" class="form-check-input" name="perro" id="" value="Perro" checked>
                     Perro
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                    
                      <input type="checkbox" class="form-check-input" name="gato" id="" value="Perro">
                     Gato
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                    
                      <input type="checkbox" class="form-check-input" name="vario" id="" value="Perro">
                    Vario
                    </label>
                  </div>
                  <small id="help_imagen" class="form-text text-muted">Solo puede ser un tipo de producto</small>
                <button type="submit" class="btn btn-primary mb-5">Crear</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

