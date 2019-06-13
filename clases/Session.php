<?php


namespace Clases;


class Session
{
    public static function start(){
        session_start();
    }

    public static function destroy(){
        session_destroy();
    }

    public static function put($pos, $valor){
        $_SESSION[$pos] = $valor;
    }

    public static function has($posicion){
        return isset($_SESSION[$posicion]);
    }

    public static function get($posicion){
        return $_SESSION[$posicion];
    }

    public static function getError(){

        if(!Session::has("error"))
            return false;

        // EREDOC

        $mensaje = <<<ALERT
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> $_SESSION[error]
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
ALERT;

        echo $mensaje;
        Session::delete("error");
    }

    public static function getMessage(){
        if(!Session::has("ok"))
            return false;

        // EREDOC

        $mensaje = <<<ALERT
         <div class="alert alert-success alert-dismissible fade show" role="alert">
                $_SESSION[ok]
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
ALERT;

        echo $mensaje;
        Session::delete("ok");
    }


    public static function delete($posicion){
        unset($_SESSION[$posicion]);
    }


    public static function loguearUsuario($usuario){

        $user = new Usuario();
        $_SESSION["usuario"] = $user;
        $_SESSION["usuario"]->setId($usuario->id);
        $_SESSION["usuario"]->setNombre($usuario->nombre);
        $_SESSION["usuario"]->setApellido($usuario->apellido);
        $_SESSION["usuario"]->setEmail($usuario->email);
        $_SESSION["usuario"]->setUsuario($usuario->usuario);
        $_SESSION["usuario"]->setRol($usuario->rol);


        Session::put("ok","Bienvenido " . $user->getUsuario());
    }


    public static function check(){
        return isset($_SESSION["usuario"]);
    }
}