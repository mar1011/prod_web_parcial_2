<?php


namespace Clases;


class Nom
{
protected $nombre;

public function  __construct($nombre)
{
    $this->nombre = $nombre;
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

}