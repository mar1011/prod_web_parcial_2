<?php

include_once("config/funcion.php");

if(empty($_POST["email"]) || empty($_POST["password"])):
    header("Location:index.php?page=4&error=datos");
    die();
endif;



$email = $_POST["email"];
$password = $_POST["password"];



if(is_dir("usuarios/$email")):
    header("Location:index.php?page=4&error=email_existe");
    die();
endif;




chmod("usuarios",777);

mkdir("usuarios/$email");


file_put_contents("usuarios/$email/email.txt",$email);


$password = password_hash($password,PASSWORD_DEFAULT);

file_put_contents("usuarios/$email/password.txt",$password);



if(empty($_POST["usuario"])):

    $usuario = explode("@",$email)[0];
else:

    $usuario = $_POST["usuario"];

endif;

file_put_contents("usuarios/$email/usuario.txt",$usuario);

file_put_contents("usuarios/$email/rol.txt","usuario");


header("Location:index.php?page=5");
die();
