<?php
session_start();

require_once('config/config_global.php');
include_once('config/arrays.php');
include_once('config/funcion.php');
require_once ('vendor/autoload.php');


?>

<!doctype html>

<html lang="es">
<head>
    <title>Angry Zeta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/banjo.png"	 />
    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <?php
    require_once 'partials/estilos.php';
    ?>
</head>
<!-- BODY-->
<body class="fondo">
<!-- HEADER -->
<?php
    require_once 'partials/header.php';
?>
<!-- FIN HEADER -->
<?php

if(!empty($_GET["page"])){
    if($_GET["page"]==0){
        include_once("secciones/inicio.php");
    }
    if($_GET["page"]==1){
        include_once("secciones/merch.php");
    }
    if($_GET["page"]==2){
        include_once("secciones/galeria.php");
    }
    if($_GET["page"]==3){
        include_once("secciones/contacto.php");
    }
    if($_GET["page"]==4){
        include_once("secciones/registro.php");
    }
    if($_GET["page"]==5){
        include_once("secciones/login.php");
    }
    if($_GET["page"]==6){
        include_once("secciones/gracias.php");
    }
    if($_GET["page"]>=7){
        include_once("secciones/error.php");
    }
    if( $_GET["page"]<0){
        include_once("secciones/error.php");
    }

}else{
    include_once("secciones/inicio.php");
}
?>

<!--FOOTER-->
<?php
    require_once 'partials/footer.php';
?>
<!--FIN FOOTER-->

<!-- Optional JavaScript -->
<?php
    require_once 'partials/js.php';
?>
</body>
</html>