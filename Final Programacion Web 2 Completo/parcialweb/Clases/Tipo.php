<?php namespace Clases;
/**
 * Created by PhpStorm.
 * User: ivan_
 * Date: 10/4/2019
 * Time: 20:44
 */



class Tipo
{
    private $nombre;

    public function __construct($nom)
    {
        $this->nombre = $nom;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


}