<?php namespace Clases;
/**
 * Created by PhpStorm.
 * User: ivan_
 * Date: 10/4/2019
 * Time: 17:42
 */



class Producto
{
    protected $nombre;
    protected $imagen;
    protected $precio;
    protected $tipo;
    protected $descripcion;

    public function __construct($nombre,$imagen,$precio,Tipo $tipo,$descripcion)
    {
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->tipo = $tipo;

    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function getImagen()
    {
        return $this->imagen;
    }


    public function getPrecio()
    {
        return $this->precio;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }



    public static function getProductoBD ($nombre)
    {
        $pdo = \Clases\BD::getConectarse();
        $query = "SELECT * FROM producto WHERE nombre = '$nombre'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $producto = $stmt->fetchObject();
        return $producto;
    }

    public static function getSomethingBD ($columna,$nombre)
    {
        $pdo = \Clases\BD::getConectarse();
        $query = "SELECT $columna FROM producto WHERE nombre = '$nombre'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $descripcion = $stmt->fetchColumn();
        return $descripcion;
    }


    
    public static function setProductoBD($nombre,$imagen,$precio,$descripcion,$tipo_producto)
    {
        $pdo = \Clases\BD::getConectarse();
        $query = 'INSERT INTO producto (nombre, imagen,`precio`,descripcion,tipo_producto)
                  VALUES (:pnombre, :pruta, :precio,:pdescripcion,:ptipo)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([
                'pnombre' => "$nombre",
                'pruta' => "$imagen",
                'precio' => $precio,
                'pdescripcion' => "$descripcion",
                'ptipo' => "$tipo_producto"
                ]);
   
    }

    public static function outProductoBD($nombre)
    {
        $pdo = \Clases\BD::getConectarse();
        $query = 'DELETE FROM producto '
        . 'WHERE nombre = :nombre';
        $stmt = $pdo->prepare($query);
        $stmt->execute([':nombre' => "$nombre"]);


    }

    public static function updProductoBD($nombreviejo,$nombre,$imagen,$precio,$descripcion,$tipo)
    {
        $pdo = \Clases\BD::getConectarse();
        $query = "UPDATE producto SET nombre = :pnombre, imagen = :pruta, precio = :precio , descripcion = :pdescripcion ,tipo_producto = :ptipo WHERE nombre = '$nombreviejo' " ;
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'pnombre' => "$nombre",
            'pruta' => "$imagen",
            'precio' => $precio,
            'pdescripcion' => "$descripcion",
            'ptipo' => "$tipo"
            ]);
    }

    public static function isProductoBD($nombre)
    {
        $pdo = \Clases\BD::getConectarse();
        $query = 'SELECT idProducto FROM producto WHERE nombre = ? LIMIT 1';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$nombre]);
        $filas = $stmt->rowCount();

        if ($filas <=0 ):
            return false;
        else:
            return true;
        endif;
    }



}