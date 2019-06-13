<?php

include_once('config/config_global.php');
include_once('config/funcion.php');
include_once('vendor/autoload.php');

//\Clases\Session::start();
session_start();

if(empty($_POST["email"]) || empty($_POST["password"])):
    \Clases\Session::put("error","Los campos email y password son obligatorios");
    header("Location: index.php?page=5");
    die();
endif;


$email = $_POST["email"];
$password = $_POST["password"];

// tengo que chequear que el email exista

if(\Clases\Usuario::login($email,$password)):
    header("Location: index.php");
    die();
else:
    header("Location: index.php?page=5");
    die();
endif;
