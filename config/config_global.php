<?php //configuración

$config = $_SERVER["HTTP_HOST"] == "localhost" ? parse_ini_file("config_local.ini",true) : parse_ini_file("config_produccion.ini",true);

error_reporting(E_ALL);
ini_set('display_errors', $config["display_errors"]);

date_default_timezone_set($config["timezone"]);