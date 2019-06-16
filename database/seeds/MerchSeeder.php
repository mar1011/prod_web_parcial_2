<?php

use Illuminate\Database\Seeder;

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
                "nombre" => "Simple",
                "imagen" => "",
                    "descripcion"=>"",
            "precio"=> "",
        "stock"=>"",
            ],
            [
                "id" => 2,
                "nombre" => "Simple",
                "imagen" => "",
                "descripcion"=>"",
                "precio"=> "",
                "stock"=>"",
            ],
            [
                "id" => 3,
                "nombre" => "Simple",
                "imagen" => "",
                "descripcion"=>"",
                "precio"=> "",
                "stock"=>"",
            ],
            [
                "id" => 4,
                "nombre" => "Simple",
                "imagen" => "",
                "descripcion"=>"",
                "precio"=> "",
                "stock"=>"",
            ],
            [
                "id" => 5,
                "nombre" => "Simple",
                "imagen" => "",
                "descripcion"=>"",
                "precio"=> "",
                "stock"=>"",
            ],
            [
                "id" => 6,
                "nombre" => "Simple",
                "imagen" => "",
                "descripcion"=>"",
                "precio"=> "",
                "stock"=>"",
            ],

        ]);
    }
}
