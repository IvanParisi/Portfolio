<?php
include_once("arrays.php");
$error=false;
$persona_no_grata = false;
function verificar($nombre,$apellido,$email,$texto)
{
    if(empty($nombre) || empty($apellido) || empty($email) || empty($texto))
    {
        $error = true;
    }else 
    {
       $error = false;
    }
    return($error);
}
function verificarcheckbox($animal,$animal1,$animal2,$animal3)
{
    if(empty($animal) && empty($animal1) && empty($animal2) && empty($animal3))
    {
        $persona_no_grata = true;
    }else 
    {
        $persona_no_grata = false;
    }
    return($persona_no_grata);
}

function imprimir($direccion,$tipo)
{
    return file_exists($direccion) ? limpiar(utf8_encode(file_get_contents($direccion))) : "Sin $tipo";
}
function imprimir_precio($precio)
{
    return file_exists($precio) ? file_get_contents($precio) : "Sin precio";
}
function limpiar($texto)
{
    return utf8_decode(htmlentities(trim($texto)));
}

function lienzo($imagenOriginal)
{
    $anchoOriginal = imagesx($imagenOriginal);
    $altoOriginal = imagesy($imagenOriginal);
    $anchoNuevo= 370;
    $altoNuevo = ($anchoNuevo * $altoOriginal) / $anchoOriginal;
    $altoNuevo = round($altoNuevo);
    $imagenNueva = imagecreatetruecolor($anchoNuevo,$altoNuevo);

    $cdlibrary = ["ancho_original" => $anchoOriginal,
    "alto_original" => $altoOriginal, "ancho_nuevo" => $anchoNuevo, "alto_nuevo" => $altoNuevo,
     "imagen_nueva" => $imagenNueva];
     return($cdlibrary);
 
}

function nombre_limpio($carpeta)
{
    
    $nombre = trim($carpeta);
    $nombre = strtolower($nombre);
    $nombre = str_replace(" ","_",$nombre);
    $nombre = $nombre;
    return $nombre;
    
}
?>