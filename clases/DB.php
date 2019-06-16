<?php


namespace Clases;


class DB
{
    private static $db;

    private function __construct(){}

    private static function connect(){

        $config = $_SERVER["HTTP_HOST"] == "localhost" ?
            parse_ini_file("config_local.ini",true) :
            parse_ini_file("config_produccion.ini",true);


        try{
            $host = $config["database"]["host"];
            $db = $config["database"]["db"];
            $charset = $config["database"]["charset"];
            $usuario =$config["database"]["usuario"];
            $password = $config["database"]["pass"];

            self::$db = new \PDO("mysql:host=$host;dbname=$db;charset=$charset",$usuario,$password);

        }catch (\PDOException $exception){
            echo $exception->getMessage();
            die();
        }

    }

    public static function getConnection(){
        if(empty(self::$db))
            self::connect();

        return self::$db;

    }

}