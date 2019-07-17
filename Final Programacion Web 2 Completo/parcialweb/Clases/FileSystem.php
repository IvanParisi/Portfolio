<?php namespace Clases;
/**
 * Created by PhpStorm.
 * User: ivan_
 * Date: 10/4/2019
 * Time: 17:43
 */

class FileSystem
{

    static public function getAll($ruta)
    {
        $recurso = opendir($ruta);

        $datos = [];

        while ($nombre = readdir($recurso))
        {
            if($nombre != "." && $nombre != "..")
            {
                $datos[] = $nombre ;
            }
        }

        closedir($recurso);

        return $datos;

    }

    static public function  filePutContents()
    {



    }
    


}