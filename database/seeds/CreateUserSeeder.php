<?php

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "id" => 1,
            "email" => "mariana.suarezdelcerro@davinci.edu.ar",
            "password" => bcrypt(1234),
            "user" => "mariana.suarezdelcerro",
            "perfil" => 1
        ]);
    }
}
