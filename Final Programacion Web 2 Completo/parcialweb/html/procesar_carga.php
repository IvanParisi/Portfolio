<?php
include_once("../funcion.php");
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();

/* Chequeo de los datos mandadoos por post */
if(empty($_POST["nombre"]) || empty($_POST["descripcion"])):
    header("Location:../index.php?page=8&error=faltadata");
    die();
endif;
if(!empty($_FILES) && ($_FILES["imagen"]["size"] == 0)):  
    header("Location:../index.php?page=8&error=imagen");
    die();
endif;
/*  To mamos los datos y los guardamos en las variables */
$imagen = $_FILES["imagen"];
if($imagen["type"] == "image/jpeg")
{
   $formato="jpeg";
}elseif ($imagen["type"] == "image/png")
{
    $formato="png";
}else 
{
    header("Location:../index.php?page=8&error=formato");
    die();
}
$nombre_sucio = $_POST["nombre"];
$nombre = nombre_limpio($nombre_sucio);
$nombre = $nombre;

/* Nos fijamos si el producto que quieren subir ya esta subido*/
chmod("../galeria/$nombre",777);
if(!is_dir("../galeria/$nombre"))
{
    mkdir("../galeria/$nombre");
}
/* Tomamos todos los datos de la imagen */ 
if ($formato == "jpeg")
{
    $imagenOriginal = imagecreatefromjpeg($imagen["tmp_name"]);
    $detalles_imagen = lienzo($imagenOriginal );
}else 
{
    $imagenOriginal = imagecreatefrompng($imagen["tmp_name"]);
    $detalles_imagen = lienzo($imagenOriginal);
}
/* Creamos el lienzo nuevo */
imagecopyresampled($detalles_imagen["imagen_nueva"] ,$imagenOriginal,0,0,0,0,
$detalles_imagen["ancho_nuevo"],$detalles_imagen["alto_nuevo"],$detalles_imagen["ancho_original"],$detalles_imagen["alto_original"]);
if($imagen["type"] == "image/png"):
    $img = imagepng($imagenOriginal ,"../galeria/$nombre/$nombre.$formato",8);
elseif($imagen["type"] == "image/jpeg"):
    $img = imagejpeg($imagenOriginal , "../galeria/$nombre/$nombre.$formato",75);
endif;
/* Creamos los .txt */
$descripcion = $_POST["descripcion"];
$descripcion = utf8_decode($descripcion);
file_put_contents("../galeria/$nombre/descripcion.txt",$descripcion);
$usuario = $_SESSION["usuario"]["usuario"];
file_put_contents("../galeria/$nombre/usuario.txt",$usuario); 
header("Location:../index.php?page=4?ok=ok");
?>