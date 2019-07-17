<?php
/**
 * Created by PhpStorm.
 * User: ivan_
 * Date: 16/4/2019
 * Time: 19:04
 */

namespace Clases;


class BD
{

    private static $bd;
    public function __construct(){}

    private static function conectarse()
    {
        if(file_exists("config_local.ini")):
        $config = $_SERVER["HTTP_HOST"] == "localhost" ? parse_ini_file("config_local.ini",true) : (null);
        elseif(file_exists("../config_local.ini")):
            $config = $_SERVER["HTTP_HOST"] == "localhost" ? parse_ini_file("../config_local.ini",true) : (null);
        elseif (file_exists("../../config_local.ini")):
            $config = $_SERVER["HTTP_HOST"] == "localhost" ? parse_ini_file("../../config_local.ini",true) : (null);
        endif;
        try
        {
            $host = $config["database"]["host"];
            $db = $config["database"]["db"];
            $charset = $config["database"]["charset"];
            $usuario =$config["database"]["usuario"];
            $password = $config["database"]["pass"];
            self::$bd= new \PDO("mysql:host=$host;dbname=$db;charset=$charset",$usuario,$password);
        }catch(\PDOException $exception)
        {
            echo $exception->getMessage();
            die();
        }

    }

    public static function getConectarse()
    {
        if(empty(self::$bd))
            self::conectarse();
        return self::$bd;
    }

}