<?php


namespace Clases;


class FileSystem
{
    static public function getAll($ruta){
        $recurso = self::opendir($ruta);

        $datos = [];

        while($nombre = readdir($recurso)):
            if($nombre != "." && $nombre != "..")
                $datos[] = $nombre;
        endwhile;

        self::closedir($recurso);

        return $datos;

    }

    static public function opendir($ruta){
        return opendir($ruta);
    }

    static public function closedir($recurso){
        closedir($recurso);
    }
}