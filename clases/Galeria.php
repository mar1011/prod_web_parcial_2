<?php namespace Clases;


    class Galeria
    {
    protected $imagen;
    protected $descripcion;


    public function __construct($imagen)
    {
        $this->imagen=$imagen;
    }

        /**
         * @return mixed
         */
        public function getImagen()
        {
            return $this->imagen;
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


    }
