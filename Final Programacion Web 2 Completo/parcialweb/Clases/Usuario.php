<?php namespace Clases;



class Usuario 
{
    protected $id;
    protected $usuario;
    protected $password;
    protected $email;
    protected $rol;


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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUsuario()
    {
        return $this->usuario;
    }


    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getRol()
    {
        return $this->rol;
    }


    public function setRol($rol)
    {
        $this->rol = $rol;
    }



    public static function register($usuario,$email,$password,$rol = "usuario")
    {

        if(self::check($email) === false)
        {
            $pdo = BD::getConectarse();
            $query = 'INSERT INTO usuario (usuario,email,password,rol)
                      VALUES (:usuario,:email,:password,:rol)';
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                'usuario' => "$usuario",
                'email' =>  "$email",
                'password' => "$password",
                'rol' => "$rol"
            ]);
            return true;
        }else
            {
              return false;
            }

    }


    private static function check($email)
    {
        $pdo = BD::getConectarse();
        $query = "SELECT idCliente FROM usuario WHERE email = ? LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);
        $igual = $stmt->rowCount();

        if ($igual <=0 ):
            return false;
        else:
            return true;
        endif;
    }



    public static function login($email,$password)
    {
        $query = "SELECT * FROM usuario WHERE email = ?";
        $bd = BD::getConectarse();
        $stmt = $bd->prepare($query);
        $stmt->execute([$email]);
        if($stmt->rowCount() == 0):
            return false;
            die();
        endif;
        $usuario = $stmt->fetchObject();
        if(!password_verify($password,$usuario->password)):
            return false;
            die();
        endif;
        Session::loguearUsuario($usuario);
        return true;
    }

    public static function  newPassword($email,$passwordnueva)
    {
        $bd = \Clases\BD::getConectarse();
        $query = "UPDATE usuario SET password = :password WHERE email = :email";
        $stmt = $bd->prepare($query);
        $stmt->execute([
            'password' => $passwordnueva,
            'email' => $email
        ]);
        return true;


    }

}