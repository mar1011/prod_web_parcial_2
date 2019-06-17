<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "compras";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable =
        [
            "metodo_pago","merch_id","clientes_id"
        ];
}
