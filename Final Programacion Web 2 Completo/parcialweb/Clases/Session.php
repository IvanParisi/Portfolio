<?php namespace Clases;


class Session
{


    public static function start()
    {
        session_start( );
    }   
    
    public static function destroy()
    {
        session_destroy();
    }

    public static function put($post,$valor)
    {
        $_SESSION[$post] = $valor;
    }
    
    public static function has($posicion)
    {
        return isset($_SESSION[$posicion]);
    }



    public static function delete($posicion)
    {
        unset($_SESSION[$posicion]);
    }   

    public static function loguearUsuario($usuario)
    {

        $user = new Usuario();
        $_SESSION["usuario"] = $user;
        $_SESSION["usuario"]->setUsuario($usuario->usuario);
        $_SESSION["usuario"]->setEmail($usuario->email);
        $_SESSION["usuario"]->setRol($usuario->rol);
        Session::put("ok","Bienvenido " . $user->getUsuario());
    }

    public static function  check()
    {
        return isset($_SESSION["usuario"]);
    }

}