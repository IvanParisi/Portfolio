<?php
require_once("../arrays.php");
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
            <h1 class="center-block">Editar producto</h1>
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




<?php

$ruta = $_POST["id"];
if(is_dir("../productos/$ruta"))
{
    $producto = str_replace($remplazar,"",$ruta);
    $descripcion =  file_exists("../productos/$ruta/descripcion.txt") ? "../productos/$ruta/descripcion.txt" : null;
    $descripcion = limpiar($descripcion);
    $descripcion = strip_tags($descripcion);
    
    //$descripcion = utf8_decode($descripcion);
    $precior =  file_exists("../productos/$ruta/precio.txt") ? "../productos/$ruta/precio.txt" : null;
    $precio = file_get_contents($precior);
    if(file_exists("../productos/$ruta/$producto.jpeg"))
    {
       $imagen = file_exists("../productos/$ruta/$producto.jpeg") ? "../productos/$ruta/$producto.jpeg" : null;
    }elseif (file_exists("../productos/$ruta/$producto.jpg"))
    {
        $imagen = file_exists("../productos/$ruta/$producto.jpg") ? "../productos/$ruta/$producto.jpg" : null;
    }else 
    {
        $imagen = file_exists("../productos/$ruta/$producto.png") ? "../productos/$ruta/$producto.png" : null;
    }

 /* if(stripos("varios/",$ruta)==false || stripos("gato/",$ruta)==false)
 {
   $tipo = "perro";
 }elseif(stripos("varios/",$ruta)==false || stripos("perro/",$ruta)==false){
    $tipo = "gato";
 }else
  {
    $tipo = "vario";
 }
 */
$pos1 = strstr($ruta,"varios/");
$pos2 = strstr($ruta,"gato/");
$pos3 = strstr($ruta,"perro/");
if($pos1 === false && $pos2 === false && $pos3 !==false ) 
{
   $tipo = "perro";
}
if($pos1 === false && $pos2 !== false && $pos3 ===false ) 
{
   $tipo = "gato";
}
if($pos1 !== false && $pos2 === false && $pos3 ===false ) 
{
   $tipo = "varios";
}
 /* if (stripos("varios/",$ruta)==false || stripos("perro/",$ruta)==false)
 {
    $tipo = "gato";
 }
 if (stripos("gato/",$ruta)==false || stripos("perro/",$ruta)==false)
 {
    $tipo = "vario";
 }

*/
}else 
{
  header("Location:index.php");
}


?>



    <div class="row">

        <div class="col-6 offset-3">
    

            <form action="procesos/editar_producto.php" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $producto ?>">
                  <input type="hidden" value="<?= $ruta ?>" name="id">
                  <input type="hidden" value="<?= $producto ?>" name="nombreactual">
                  <input type="hidden" value="<?= $tipo ?>" name="tipo">
                   
                </div>

                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion" >
                  <?= isset ($descripcion) ? imprimir($descripcion,"descripcion") : null ?>
                  </textarea>
                  
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" min="0" class="form-control" 
                id="precio" value="<?= $precio ?>" step="0.01"> 
                 
                </div>
         
                <div class="form-group">
                  <label for="imagen">Foto</label>
                  
                  <?php
                        if(isset($imagen)):
                    ?>
                            <img src="<?= $imagen; ?>" alt="" width="100">
                            <input type="hidden" value="<?= $imagen ?>" name="idi">
                    <?php
                        endif;
                    ?>
    
                  <input type="file" accept="image/jpeg,image/png" class="form-control-file" name="imagen" id="imagen"  aria-describedby="help_imagen" >
                  <small id="help_imagen" class="form-text text-muted">La imágen del producto debe ser en formato jpg o png y pesar menos de 2mb</small>
                </div> 
                <label for="precio">Tipo de producto</label>
                <div class="form-check">
                    <label class="form-check-label">
                    
                      <input type="checkbox" class="form-check-input" name="perro" id="" value="Perro" 
                      <?php
                      if ($tipo == "perro"):
                      ?>
                   
                      checked

                      <?php
                      endif;
                      ?>
                      >
                     Perro
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                    
                      <input type="checkbox" class="form-check-input" name="gato" id="" value="Perro"
                      <?php
                      if ($tipo == "gato"):
                      ?>
                   
                      checked

                      <?php
                      endif;
                      ?>
                      >
                     Gato
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                    
                      <input type="checkbox" class="form-check-input" name="vario" id="" value="Perro"
                      <?php
                      if ($tipo == "varios"):
                      ?>
                   
                      checked

                      <?php
                      endif;
                      ?>
                      >
                    Vario
                    </label>
                  </div>
                  <small id="help_imagen" class="form-text text-muted">Solo puede ser un tipo de producto</small>
                <button type="submit" class="btn btn-primary mb-5">Editar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
