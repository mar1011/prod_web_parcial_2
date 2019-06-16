<?php namespace Clases;


    class Galeria
    {
        protected $imagen;
        protected $descripcion;


        public function __construct($imagen)
        {
            $this->imagen = $imagen;

           // parent::__construct($imagen);
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

        public static function armarGaleria($img)
        {
            $imagenes = Filesystem::getAll("galeria/$img");

            $imagenGaleria = new Imagen($img);

            $imgs = [];

            foreach ($imagenes as $img):

                $imagen = "galeria/" . $imagenGaleria->getNombre() . "/" . $img . "/$img.jpg";

                $imgs[] = new Galeria($imagen);
            endforeach;

            return $imgs;
        }

    }
