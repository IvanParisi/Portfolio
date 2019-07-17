
<div class="container">
        <h1 class="mt-5">Fotos</h1>
    <div class="row mt-3">
   <?php
   if(!isset($_SESSION["login"]))
   {
   header("Location:index.php?page=5");
   }
        
            if(!empty($_GET["error"])):
                $error = $_GET["error"];
                $color = "danger";

                if($error == "sin_item"):
                    $mensaje = "No se seleccionó ninguna foto.";
                elseif($error == "item"):
                    $mensaje = "La foto seleccionada no existe.";
                elseif($error == "nombre"):
                    $mensaje = "No le puso ningun nombre a su mascota";
                elseif($error == "descripcion"):
                    $mensaje = "No le puso ninguna descripcion  a su mascota. (Puede ser algo breve)";
                elseif($error == "formato"):
                  $mensaje = "No es un Formato de imagen valido";
                elseif ($error == "yaexiste"):
                  $mensaje = "El nuevo nombre que le quierda dar ya esta en uso";
                else:
                    $mensaje = "";
                endif;

            elseif(!empty($_GET["ok"])):
                $ok = $_GET["ok"];
                $color = "success";

                if($ok == "item_borrado"):
                    $item= !empty($_GET["item"]) ? $_GET["item"] : "";
                    $nombre =  str_ireplace($numeros,"",$item);
                    $mensaje = "Se eliminó correctamente el item: ". ucfirst($nombre);
                elseif($ok == "editado"):
                {
                    $item= !empty($_GET["editado"]) ? $_GET["editado"] : "";
                    $nombre =  str_ireplace($numeros,"",$item);
                    $mensaje = "Se edito correctamente el item: ". ucfirst($nombre);
                }
                endif;

            endif;

            if(isset($mensaje)):
        ?>
            <div class="col-12">
                
            
                <div class="alert alert-<?= $color; ?> alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <p><?= $mensaje; ?></p>
                </div>
            </div>
        
        <?php
            endif;

        ?>

        <div class="col-12">

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <?php
                        if($_SESSION["usuario"]["rol"]=="admin"):
                        ?>
                        <th>Usuario</th>
                        <?php
                        endif;
                        ?>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $carpeta = "galeria";

                    $dir = opendir($carpeta);
                    while($fotos = readdir($dir)):
                        if($fotos != "." && $fotos != ".."):
                          if($_SESSION["usuario"]["rol"]=="admin"):
                            $imagen = count(glob("$carpeta/$fotos/$fotos.*")) > 0 ? glob("$carpeta/$fotos/$fotos.*")[0] : "../img/sin_imagen.jpg";   
                            $listo = true;
                  
                     
                ?>

                    <tr>
                        <td><?= ucfirst($fotos) ?></td>
                        <td><?= imprimir("$carpeta/$fotos/descripcion.txt","detalle"); ?></td>
                        <td><img src="<?= $imagen; ?>" alt="<?= $fotos; ?>" width="50"></td>
                        <td><?= imprimir("$carpeta/$fotos/usuario.txt","usuario") ?>
                        </td>
                        <td>
                        <div class="row">
                        <div class="btn-group">
                            <form action="html/eliminar_foto.php" method="post">
                            <input type="hidden" value="<?= "$fotos"; ?>" name="id">
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                           
                            </form>
                            <form action="index.php?page=10" method="post">
                                <input type="hidden" value="<?= "$fotos"; ?>" name="id">
                                <button type="submit" class="btn btn-sm btn-primary ml-1">Editar</button>
                            </form>
                            </div>
                            </div>
                        </td>
                      
                        
                    </tr>
                <?php
              endif;
                        endif;
                    endwhile;
                    if(!isset($listo)):
                    $carpeta = "galeria";

                    $dir = opendir($carpeta);
                    while($fotos = readdir($dir)):
                        if($fotos != "." && $fotos != ".."):
                    if(file_get_contents("galeria/$fotos/usuario.txt") == $_SESSION["usuario"]["usuario"]):
                        $imagen = count(glob("$carpeta/$fotos/$fotos.*")) > 0 ? glob("$carpeta/$fotos/$fotos.*")[0] : "../img/sin_imagen.jpg";     
                 
                ?>

                    <tr>
                        <td><?= ucfirst($fotos) ?></td>
                        <td><?= imprimir("$carpeta/$fotos/descripcion.txt","detalle"); ?></td>
                        <td><img src="<?= $imagen; ?>" alt="<?= $fotos; ?>" width="50"></td>
                        <td>
                        <div class="row">
                        <div class="btn-group">
                            <form action="html/eliminar_foto.php" method="post">
                            <input type="hidden" value="<?= "$fotos"; ?>" name="id">
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                           
                            </form>
                            <form action="index.php?page=10" method="post">
                                <input type="hidden" value="<?= "$fotos"; ?>" name="id">
                                <button type="submit" class="btn btn-sm btn-primary ml-1">Editar</button>
                            </form>
                            </div>
                            </div>
                        </td>
                    </tr>


                <?php
                
                endif;  
                endif;  
                endwhile;
            endif;
                ?>
                
                </tbody>
            </table>

        </div>
    
    </div>
</div>