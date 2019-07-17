<?php
require_once("../funcion.php");
ini_set("upload_max_filesize","30M");
$nombre = $_POST["nombreactual"];
$nombrenuevo = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$descripcion = strip_tags($descripcion);
$descripcion = utf8_decode($descripcion);
if($nombre!==$nombrenuevo)
{
    $nombrenuevo = $_POST["nombre"];
    $boolean  = true;
}else 
{
    $nombrenuevo = $_POST["nombreactual"];
}
if(empty($nombre))
{
    header("Location:../index.php?page=9&item=$nombre&error=nombre");
    die();
}
if(empty($descripcion))
{
    header("Location:../index.php?page=9&item=$nombre&error=descripcion");
    die();
}
if(!empty($_FILES))
{
  $imagen = $_FILES["imagen"];
  $imagenborrar = $_POST["idi"];
  if(!empty($imagen))
  {
      if($imagen["type"] == "image/jpeg")
      {
      $formato="jpeg";
      }elseif ($imagen["type"] == "image/png")
      {
          $formato="png";
      }elseif($imagen["type"] == "image/jpg")
      {
          header("Location:../index.php?page=9&error=formato");
          die();
      }
  }
}
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

if($boolean===true)
{
   if(is_dir("../galeria/$nombrenuevo"))
   {
    header("Location:../index.php?page=9&item=$nombre&error=yaexiste");
    die();
   }
}

$carpeta = opendir("../galeria/$nombre");
if(isset($imagen))
{
    while($file = readdir($carpeta)){
        if($file != "." && $file != "..")
        {
    
            unlink("../galeria/$nombre/$imagenborrar");
            
        }
    }
   
    if($imagen["type"] == "image/png"):
        $img = imagepng($imagenOriginal ,"../galeria/$nombrenuevo/$nombrenuevo.$formato",8);
    elseif($imagen["type"] == "image/jpeg"):
        $img = imagejpeg($imagenOriginal , "../galeria/$tipoactual/$nombrenuevo/$nombrenuevo.$formato",75);
    endif;
}
if(!is_dir("../galeria/$nombrenuevo"))
{
    rename("../galeria/$nombre","../galeria/$nombrenuevo");
}


if(rename("../galeria/$nombrenuevo/$nombre.jpeg","../galeria/$nombrenuevo/$nombrenuevo.jpeg")==false)
{
  if(rename("../galeria/$nombrenuevo/$nombre.jpg","../galeria/$nombrenuevo/$nombrenuevo.jpg")==false)
  {
    rename("../galeria/$nombrenuevo/$nombre.png","../galeria/$nombrenuevo/$nombrenuevo.png");
  }
}
file_put_contents("../galeria/$nombrenuevo/descripcion.txt",$descripcion);
move_uploaded_file($imagen["tmp_name"],"../../productos/$tipoactual/$nombrenuevo/$nombrenuevo.$formato");

header("Location:../index.php?page=9&editado=$nombrenuevo&ok=editado");

