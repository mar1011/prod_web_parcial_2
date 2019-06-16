<?php namespace Clases;


class Merch
{
    protected $imagen;
    protected $descripcion;
    protected $nombre;


    public function __construct($nombre,$imagen)
    {
        $this->nombre=$nombre;
        $this->imagen=$imagen;
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
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public static function merchPorNombre($nom)
    {
        $merch = Filesystem::getAll("merch/$nom");

        $nombreMerch = new Nombre($nom);

        $nombres = [];

        foreach($merch as $m):

            $imagen = "merch/". $nombreMerch->getNombre() . "/" . $m . "/$m.jpg";
            $nombre = file_get_contents("merch/". $nombreMerch->getNombre() . "/" . $m . "/nombre.txt");

            $nombres[] = new Merch($nombre,$imagen);

        endforeach;

        return $nombres;

    }

}