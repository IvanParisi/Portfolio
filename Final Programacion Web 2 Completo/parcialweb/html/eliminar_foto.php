<?php

if(empty($_POST["id"])){
    header("Location:../index.php?page=9&error=sin_item");
    die();
}

$item= $_POST["id"];

if(!is_dir("../galeria/$item")){
    header("Location:../index.php?page=9a&error=item");
    die();
}


$carpeta = opendir("../galeria/$item");

while($file = readdir($carpeta)){
    if($file != "." && $file != "..")
    {

        unlink("../galeria/$item/$file");
        
    }
}

rmdir("../galeria/$item");


header("Location:../index.php?page=9&ok=item_borrado&item=$item");