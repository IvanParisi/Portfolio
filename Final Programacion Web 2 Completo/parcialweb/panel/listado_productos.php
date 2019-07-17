<?php

if($_SESSION["usuario"]["rol"]!="admin" && !empty($_POST["sec"]))
{
    session_start();
  header("Location:../index.php?page=1");
}
?>
<div class="container">
        <h1 class="mt-5">Productos</h1>
    <div class="row mt-3">

   <?php
            if(!empty($_GET["error"])):
                $error = $_GET["error"];
                $color = "danger";

                if($error == "sin_producto"):
                    $mensaje = "No se seleccionó ningun producto.";
                elseif($error == "producto"):
                    $mensaje = "El producto seleccionado no existe.";
                elseif($error == "faltadata"):
                    $mensaje = "Todos los campos son obligatorios";
                elseif($error == "imagen"):
                    $mensaje = "No es una imagen valida";
                elseif($error == "formato"):
                  $mensaje = "No es un Formato de imagen valido";
                elseif($error == "masdeuno"):
                  $mensaje = "Solo se puede marcar mas de un tipo de producto!";
                elseif ($error == "ingresotexto"):
                  $mensaje = "Ingeso texto en el precio";
                elseif ($error == "yaexiste"):
                  $mensaje = "El nuevo nombre que le quierda dar ya esta en uso";
                else:
                    $mensaje = "";
                endif;

            elseif(!empty($_GET["ok"])):
                $ok = $_GET["ok"];
                $color = "success";

                if($ok == "producto_borrado"):
                    $producto= !empty($_GET["producto"]) ? $_GET["producto"] : "";
                    $nombre =  str_ireplace($numeros,"",$producto);
                    $mensaje = "Se eliminó correctamente el producto: ". ucfirst($nombre);
                elseif($ok == "editado"):
                {
                    $producto= !empty($_GET["editado"]) ? $_GET["editado"] : "";
                    $nombre =  str_ireplace($numeros,"",$producto);
                    $mensaje = "Se edito correctamente el producto: ". ucfirst($nombre);
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
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
             <!-- PERRO -->
                <?php
                    
                    $carpeta1 = "../productos/perro";
                    $dir1 = opendir($carpeta1);
                    while($productos1 = readdir($dir1)):
                        if($productos1 != "." && $productos1 != ".."):
                            $imagen1 = count(glob("$carpeta1/$productos1/$productos1.*")) > 0 ? glob("$carpeta1/$productos1/$productos1.*")[0] : "../img/sin_imagen.jpg";                            
                     
                ?>

                    <tr>
                        <td><?= ucfirst($productos1) ?></td>
                        <td><?= imprimir("$carpeta1/$productos1/descripcion.txt","detalle"); ?></td>
                        <td><img src="<?= $imagen1; ?>" alt="<?= $productos1; ?>" width="50"></td>
                        <div class="row">
                        <td>
                         <div class="btn-group">
                            <form action="procesos/eliminar_producto.php" method="post">
                                <input type="hidden" value="<?= "perro/$productos1"; ?>" name="id">
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                            <form action="index.php?sec=editar" method="post">
                                <input type="hidden" value="<?= "perro/$productos1"; ?>" name="id">
                                <button type="submit" class="btn btn-sm btn-primary ml-1">Editar</button>
                            </form>
                            </div>
                        </td>
                        </div>
                        
                    </tr>
                <?php
                        endif;
                    endwhile;
                ?>
                <!-- GATO -->
                <?php
                    
                    $carpeta2 = "../productos/gato";
                    $dir2 = opendir($carpeta2);
                    while($productos2 = readdir($dir2)):
                        if($productos2 != "." && $productos2 != ".."):
                            $imagen2 = count(glob("$carpeta2/$productos2/$productos2.*")) > 0 ? glob("$carpeta2/$productos2/$productos2.*")[0] : "../img/sin_imagen.jpg";                            
                     
                ?>

                    <tr>
                        <td><?= ucfirst($productos2) ?></td>
                        <td><?= imprimir("$carpeta2/$productos2/descripcion.txt","detalle"); ?></td>
                        <td><img src="<?= $imagen2; ?>" alt="<?= $productos2; ?>" width="50"></td>
                        <div class="row">
                        <td>
                         <div class="btn-group">
                            <form action="procesos/eliminar_producto.php" method="post">
                                <input type="hidden" value="<?= "gato/$productos2"; ?>" name="id">
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                            <form action="index.php?sec=editar" method="post">
                                <input type="hidden" value="<?= "gato/$productos2"; ?>" name="id">
                                <button type="submit" class="btn btn-sm btn-primary ml-1">Editar</button>
                            </form>
                            </div>
                        </td>
                        </div>
                    </tr>
                <?php
                        endif;
                    endwhile;
                ?>
                   <!-- VARIOS -->
                   <?php
                    
                    $carpeta3= "../productos/varios";
                    $dir3 = opendir($carpeta3);
                    while($productos3 = readdir($dir3)):
                        if($productos3 != "." && $productos3 != ".."):
                            $imagen3 = count(glob("$carpeta3/$productos3/$productos3.*")) > 0 ? glob("$carpeta3/$productos3/$productos3.*")[0] : "../img/sin_imagen.jpg";                            
                     
                ?>

                    <tr>
                        <td><?= ucfirst($productos3) ?></td>
                        <td><?= imprimir("$carpeta3/$productos3/descripcion.txt","detalle"); ?></td>
                        <td><img src="<?= $imagen3; ?>" alt="<?= $productos3; ?>" width="50"></td>
                        <div class="row">
                        <td>
                         <div class="btn-group">
                            <form action="procesos/eliminar_producto.php" method="post">
                                <input type="hidden" value="<?= "varios/$productos3"; ?>" name="id">
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                            <form action="index.php?sec=editar" method="post">
                                <input type="hidden" value="<?= "varios/$productos3"; ?>" name="id">
                                <button type="submit" class="btn btn-sm btn-primary ml-1">Editar</button>
                            </form>
                            </div>
                        </td>
                        </div>
                    </tr>
                <?php
                        endif;
                    endwhile;
                ?>
                   
                </tbody>
            </table>

        </div>
    
    </div>
</div>