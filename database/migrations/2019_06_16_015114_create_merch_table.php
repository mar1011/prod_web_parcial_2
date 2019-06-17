<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre",50);
            $table->string("imagen",75)->nullable();
            $table->string("descripcion",250)->nullable();
            $table->float("precio");
            $table->boolean("stock")->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merch');
    }
}
