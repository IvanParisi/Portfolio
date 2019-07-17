<?php
if(empty($_POST["id"]))
{
    header("Location:index.php?page=9&error=vacio");
    die();
}
$item = $_POST["id"];
if(!is_dir("galeria/$item"))
{
    header("Location:index.php?page=9&error=no_existe");
    die();
}
$descripcion = file_exists("galeria/$item/descripcion.txt") ? "galeria/$item/descripcion.txt" : null;
if(file_exists("galeria/$item/$item.jpeg"))
{
       $imagen = file_exists("galeria/$item/$item.jpeg") ? "galeria/$item/$item.jpeg" : null;
}elseif (file_exists("galeria/$item/$item.jpg"))
{
       $imagen = file_exists("galeria/$item/$item.jpg") ? "galeria/$item/$item.jpg" : null;
}else 
{
       $imagen = file_exists("galeria/$item/$item.png") ? "galeria/$item/$item.png" : null;
}
?>
    <div class="row margencar">

<div class="col-6 offset-3">
    <form action="html/procesar_editado.php" enctype="multipart/form-data" method="POST" class="bg-light p-3">
        <div class="form-group">
          <label for="nombre">Nombre de su mascota</label>
          <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $item ?>" maxlength="20"
          >
          <input type="hidden" value="<?= $item ?>" name="nombreactual">
        </div>

        <div class="form-group">
          <label for="descripcion">Descripcion de su mascota</label>
          <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion" maxlength="220">
          <?= isset ($descripcion) ? imprimir($descripcion,"descripcion") : null ?>
         </textarea>
         
        </div>

        <?php
                        if(isset($imagen)):
                    ?>
                     <label for="imagen">Foto actual</label>
                            <img src="<?= $imagen; ?>" alt="" width="100">
                            <input type="hidden" value="<?= $imagen ?>" name="idi">
                    <?php
                        endif;
                    ?>
        <div class="form-group">
          <label for="imagen">Nueva foto</label>

          <input type="file" accept="image/jpeg,image/png" class="form-control-file" name="imagen" id="imagen" placeholder="" aria-describedby="help_imagen">
          <small id="help_imagen" class="form-text text-muted">La foto de su mascota debe ser de formato jpg o png y pesar menos de 2mb</small>
        </div> 
       
        
          
          
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
    
</div>

</div>