<?php
include_once('config_global.php');

function verificar($nombre,$apellido,$mail){

    if(empty($nombre) || empty($apellido) || empty($mail) ){
        $error=true;

}else{
    $error=false;
}
return($error);
}


function imprimir_detalle($ruta,$tipo){
    return file_exists($ruta) ? limpiar_string(file_get_contents($ruta)) : "Sin $tipo";
}


function limpiar_string($str){
    return nl2br(htmlentities(trim($str)));
}

function nombre_limpio($carpeta){
    $nombre = trim($carpeta);
    $nombre = strtolower($nombre);

    $nombre = str_replace(" ","_",$nombre);

    return $nombre;
}

function is_active($val){
    if(!empty($_GET['s'])):
        if($_GET['s'] == $val)
            return " class='active'";
    endif;

    return false;
}

set_exception_handler('error_logs');

function error_logs(\Clases\Exception $exception){

    echo $exception->getMensaje("red","#fff");


}

function dd($arr, $print = true){
    echo "<pre>";
    if($print)
        print_r($arr);
    else
        var_dump($arr);
    echo "</pre>";

    die();

}