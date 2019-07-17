<?php
/**
 * Created by PhpStorm.
 * User: ivan_
 * Date: 20/4/2019
 * Time: 00:58
 */

namespace Clases;


class ItemsGaleria
{
    protected $nombre;
    protected $imagen;
    protected $descripcion;
    protected $usuario;

    public function __construct($nombre, $imagen, $descripcion, $usuario)
    {
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
        $this->usuario = $usuario;
    }

    public function  __get($propiedad)
    {
        $getter = "get" . ucfirst($propiedad);

        if(method_exists($this,$getter)):
            return $this->$getter();

        elseif(property_exists($this,$propiedad)):
            return $this->$propiedad;

        elseif(array_key_exists($propiedad, $this->atributos)):
            return $this->atributos[$propiedad];
        endif;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public static function  getGaleria()
    {
        $galeria = Filesystem::getAll("galeria");

        $img = [];

        foreach ($galeria as $item):
            $imagen = "galeria/" . $item . "/" . "$item.jpg";
            $descripcion = file_get_contents("galeria/" . $item . "/descripcion.txt");
            $usuario = file_get_contents("galeria/" . $item . "/usuario.txt");

            $img [] = new ItemsGaleria ($item,$imagen,$descripcion,$usuario);
        endforeach;

        return $img;
    }




}