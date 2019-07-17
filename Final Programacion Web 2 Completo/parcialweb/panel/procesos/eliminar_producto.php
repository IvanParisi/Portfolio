<?php

if(empty($_POST["id"])){
    header("Location:../index.php?sec=lista&error=sin_producto");
    die();
}

$producto= $_POST["id"];

if(!is_dir("../../productos/$producto")){
    header("Location:../index.php?sec=lista&error=producto");
    die();
}


$carpeta = opendir("../../productos/$producto");

while($file = readdir($carpeta)){
    if($file != "." && $file != "..")
    {

        unlink("../../productos/$producto/$file");
        
    }
}

rmdir("../../productos/$producto");


header("Location:../index.php?sec=lista&ok=producto_borrado&producto=$producto");






