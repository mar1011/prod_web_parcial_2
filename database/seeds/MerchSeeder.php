<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("merch")->insert([
            [
                "id" => 1,
                "nombre" => "CD Angry Zeta & The Hillbullys",
                "imagen" => "",
                "descripcion"=>"Primer CD de Estudio",
                "precio"=> 100,
                "stock"=>"1",
            ],
            [
                "id" => 2,
                "nombre" => "CD Angry Zeta & The Hillbullys",
                "imagen" => "",
                "descripcion"=>"CD grabado en Vivo",
                "precio"=> 150,
                "stock"=>"1",
            ],
            [
                "id" => 3,
                "nombre" => "Parche Angry Zeta & The Hillbullys",
                "imagen" => "",
                "descripcion"=>"Parches bordados.
                                Colores: Negro y Blanco.
                                Colores: Rojo, Blanco y Amarillo",
                "precio"=> 80,
                "stock"=>"1",
            ],
            [
                "id" => 4,
                "nombre" => "Pin Angry Zeta & The Hillbullys",
                "imagen" => "",
                "descripcion"=>"Pin de metal. 
                                Confeccionados por HorrorFlorido.",
                "precio"=> 80,
                "stock"=>"1",
            ],
            [
                "id" => 5,
                "nombre" => "Remera Angry Zeta & The Hillbullys",
                "imagen" => "",
                "descripcion"=>"Remera de Angry Zeta & The Hillbullys.
                                Talles: S-M-L-XL-XXL",
                "precio"=> 400,
                "stock"=>"1",
            ],
            [
                "id" => 6,
                "nombre" => "Remera Angry Zeta & The Hillbullys",
                "imagen" => "",
                "descripcion"=>"Remera con el logo del oso.
                                Talles: S-M-L-XL-XXL",
                "precio"=> 400,
                "stock"=>"0",
            ],

        ]);
    }
}
