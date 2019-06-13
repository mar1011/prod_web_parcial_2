<?php


namespace Clases;


class Usuario
{
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $usuario;
    protected $password;
    protected $email;
    protected $rol;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        // php7 -> fusión de null
        // pasas una variable y si el resultado de esa variable es null le podes pasar el valor que quieras que guarde.
        return $this->usuario ?? $this->email;

    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }




    public static function login($email,$password){

        $query = "SELECT * FROM usuarios WHERE email = ?";

        $db = DB::getConnection();
        $stmt = $db->prepare($query);

        $stmt->execute([$email]);

        // DRY
        /*
            Don't
            Repeat
            Yourself
        */
        // Si coincide o no el email
        if($stmt->rowCount() == 0):
            Session::put("error", "El email o el password que ingresaste es incorrecto");
            return false;
        endif;

        // sabemos que el email que ingresó ahora es correcto
        $usuario = $stmt->fetchObject();

        //chequeo del password
        if(!password_verify($password,$usuario->password)):
            Session::put("error", "El email o el password que ingresaste es incorrecto");
            return false;
        endif;

        // Acá el email del usuario es correcto y el password tambien

        //logueamos al usuario
        Session::loguearUsuario($usuario);

        return true;
    }
}