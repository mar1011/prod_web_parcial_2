<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("metodo_pago",20);

            //campos de FK
            $table->unsignedInteger("merch_id")->unsigned();
            $table->unsignedInteger("clientes_id")->unsigned();

            $table->foreign("merch_id")->references
            ("id")->on("merch")->onUpdate
            ("cascade")->onDelete("cascade");

            $table->foreign("clientes_id")->references
            ("id")->on("clientes")->onUpdate
            ("cascade")->onDelete("no action");

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
        Schema::dropIfExists('compras');
    }
}
