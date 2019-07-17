<?php
require_once("../../funcion.php");
ini_set("upload_max_filesize","30M");
$ruta = $_POST["id"];
$nombre = $_POST["nombreactual"];
$nombrenuevo = $_POST["nombre"];
$precio = $_POST["precio"];
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
          header("Location:../index.php?sec=lista&error=formato");
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

$descripcion = str_replace("<br/>","",$descripcion);
if(empty($ruta) || !is_dir("../../productos/$ruta")):
    header("Location:../index.php?sec=lista&item=$nombre&error=no_existe");
    die();
endif;
if(empty($nombre))
{
    header("Location:../index.php?sec=lista&item=$nombre&error=nombre");
    die();
}
if(empty($precio))
{
    header("Location:../index.php?sec=lista&item=$nombre&error=precio");
    die();
}
if(empty($descripcion))
{
    header("Location:../index.php?sec=lista&item=$nombre&error=descripcion");
    die();
}
if((!empty($_POST["perro"]) && !empty($_POST["gato"]) && !empty($_POST["vario"]))||
(!empty($_POST["perro"]) && !empty($_POST["gato"]))||
 (!empty($_POST["perro"]) && !empty($_POST["vario"])) ||
 (!empty($_POST["gato"]) && !empty($_POST["vario"])) ):
    header("Location:../index.php?sec=lista&item=$nombre&error=masdeuno");
    die();
endif;
if(!empty($_POST["perro"])):
    $tipo = "perro";
endif;
if(!empty($_POST["gato"])):
    $tipo = "gato";
endif;
if(!empty($_POST["vario"])):
    $tipo = "varios";
endif;
$pos = strstr($ruta,$tipo);
if($pos !== false)
{
   $tipo = null;
  
}
$tipoactual = $_POST["tipo"];


if(!empty($tipo))
{ 
    
    
       if(is_dir("../../productos/$tipo/$nombrenuevo"))
       {
        header("Location:../index.php?sec=lista&item=$nombre&error=yaexiste");
        die();
       }
    
  
    chmod("../../productos/$tipo",777);
    if(!is_dir("../../productos/$tipo/$nombrenuevo"))
    {
        mkdir("../../productos/$tipo/$nombrenuevo");
    }else 
    {
        header("Location:../index.php?sec=lista&item=$nombre&error=yaexiste");
    }
    if(rename("../../productos/$ruta/$nombre.jpeg","../../productos/$tipo/$nombrenuevo/$nombrenuevo.jpeg")==false)
    {
      if(rename("../../productos/$ruta/$nombre.jpg","../../productos/$tipo/$nombrenuevo/$nombrenuevo.jpg")==false)
      {
        rename("../../productos/$ruta/$nombre.png","../../productos/$tipo/$nombrenuevo/$nombrenuevo.png");
      }
    }
    if(isset($imagen))
    {
        while($file = readdir($carpeta)){
            if($file != "." && $file != "..")
            {
        
                unlink("../../productos/$ruta/$imagenborrar");
                
            }
        }
        if($imagen["type"] == "image/png"):
            $img = imagepng($imagenOriginal ,"../../productos/$ruta/$nombre.$formato",8);
        elseif($imagen["type"] == "image/jpeg"):
            $img = imagejpeg($imagenOriginal , "../../productos/$ruta/$nombre.$formato",75);
        endif;
    }

    file_put_contents("../../productos/$tipo/$nombrenuevo/descripcion.txt",$descripcion);
    file_put_contents("../../productos/$tipo/$nombrenuevo/precio.txt",$precio);
    $carpeta = opendir("../../productos/$ruta");
    while($file = readdir($carpeta))
    {
        if($file != "." && $file != "..")
        {
    
            unlink("../../productos/$ruta/$file");
            
        }
        rmdir("../../productos/$ruta");
    }
}else 
{
    if($boolean===true)
    {
       if(is_dir("../../productos/$tipoactual/$nombrenuevo"))
       {
        header("Location:../index.php?sec=lista&item=$nombre&error=yaexiste");
        die();
       }
    }
 $carpeta = opendir("../../productos/$ruta");
    if(isset($imagen))
    {
        while($file = readdir($carpeta)){
            if($file != "." && $file != "..")
            {
        
                unlink("../../productos/$ruta/$imagenborrar");
                
            }
        }
       
        if($imagen["type"] == "image/png"):
            $img = imagepng($imagenOriginal ,"../../productos/$tipoactual/$nombrenuevo/$nombrenuevo.$formato",8);
        elseif($imagen["type"] == "image/jpeg"):
            $img = imagejpeg($imagenOriginal , "../../productos/$tipoactual/$nombrenuevo/$nombrenuevo.$formato",75);
        endif;
    }
    if(!is_dir("../../productos/$tipoactual/$nombrenuevo"))
    {
        rename("../../productos/$tipoactual/$nombre","../../productos/$tipoactual/$nombrenuevo");
    }
    
    
    if(rename("../../productos/$tipoactual/$nombrenuevo/$nombre.jpeg","../../productos/$tipoactual/$nombrenuevo/$nombrenuevo.jpeg")==false)
    {
      if(rename("../../productos/$tipoactual/$nombrenuevo/$nombre.jpg","../../productos/$tipoactual/$nombrenuevo/$nombrenuevo.jpg")==false)
      {
        rename("../../productos/$tipoactual/$nombrenuevo/$nombre.png","../../productos/$tipoactual/$nombrenuevo/$nombrenuevo.png");
      }
    }
    file_put_contents("../../productos/$tipoactual/$nombrenuevo/descripcion.txt",$descripcion);
    file_put_contents("../../productos/$tipoactual/$nombrenuevo/precio.txt",$precio);
    move_uploaded_file($imagen["tmp_name"],"../../productos/$tipoactual/$nombrenuevo/$nombrenuevo.$formato");
}

header("Location:../index.php?sec=lista&editado=$nombrenuevo&ok=editado");

