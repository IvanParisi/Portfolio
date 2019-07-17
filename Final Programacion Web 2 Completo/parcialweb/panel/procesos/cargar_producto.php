<?php
include_once("../../funcion.php");
ini_set('display_errors',1);
error_reporting(E_ALL);
/** Chequedo de datos mando por post y files */
if(empty($_POST["nombre"]) || empty($_POST["descripcion"]) || empty($_POST["precio"]) ):
    header("Location: ../index.php?sec=cargar&error=faltadata");
    die();
endif;

if(!empty($_FILES) && ($_FILES["imagen"]["size"] == 0)):
        
    header("Location:../index.php?sec=cargar&error=imagen");
    die();

endif; 
if(empty($_POST["perro"]) && empty($_POST["gato"]) && empty($_POST["vario"])):
    header("Location: ../index.php?sec=cargar&error=faltadata");
    die();
endif;
if((!empty($_POST["perro"]) && !empty($_POST["gato"]) && !empty($_POST["vario"]))||
(!empty($_POST["perro"]) && !empty($_POST["gato"]))||
 (!empty($_POST["perro"]) && !empty($_POST["vario"])) ||
 (!empty($_POST["gato"]) && !empty($_POST["vario"])) ):
    header("Location: ../index.php?sec=cargar&error=masdeuno");
    die();
endif;

if(!empty($_POST["perro"])):
    $tipo = "perro";
endif;
if(!empty($_POST["gato"])):
    $tipo = "gato";
endif;
if(!empty($_POST["vario"])):
    $tipo = "vario";
endif;
$imagen = $_FILES["imagen"];

/** Obtenemos el formato de la imagen */
if($imagen["type"] == "image/jpeg")
{
   $formato="jpeg";
}elseif ($imagen["type"] == "image/png")
{
    $formato="png";
}else 
{
    header("Location:../index.php?sec=cargar&error=formato");
    die();
}
/** Creamos el nombre de la carpeta y creamos la carpeta */
$nombre_sucio = $_POST["nombre"];
$nombre = nombre_limpio($nombre_sucio);
$nombre = $nombre;


chmod("../../productos/$tipo",777);
if(!is_dir("../../productos/$tipo/$nombre"))
{
    mkdir("../../productos/$tipo/$nombre");
}else 
{

}

/** Creamos el lienzo */
if ($formato == "jpeg")
{
    $imagenOriginal = imagecreatefromjpeg($imagen["tmp_name"]);
    $detalles_imagen = lienzo($imagenOriginal );
}else 
{
    $imagenOriginal = imagecreatefrompng($imagen["tmp_name"]);
    $detalles_imagen = lienzo($imagenOriginal );
}

imagecopyresampled($detalles_imagen["imagen_nueva"] ,$imagenOriginal,0,0,0,0,
$detalles_imagen["ancho_nuevo"],$detalles_imagen["alto_nuevo"],$detalles_imagen["ancho_original"],$detalles_imagen["alto_original"]);
    
/** Ponemos la imagen en la carpeta */
if($imagen["type"] == "image/png"):
    $img = imagepng($imagenOriginal ,"../../productos/$tipo/$nombre/$nombre.$formato",8);
elseif($imagen["type"] == "image/jpeg"):
    $img = imagejpeg($imagenOriginal , "../../productos/$tipo/$nombre/$nombre.$formato",75);
endif;
/** Creamos la descripcion y precio .txt */
$descripcion = $_POST["descripcion"];
$descripcion = utf8_decode($descripcion);

file_put_contents("../../productos/$tipo/$nombre/descripcion.txt",$descripcion);




$precio = $_POST["precio"];
$precio = "ARS" . $precio;
file_put_contents("../../productos/$tipo/$nombre/precio.txt",$precio); 

header("Location:../index.php?sec=lista");
?>