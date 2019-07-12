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


    protected function Cliente(){
        return $this->belongsTo(Cliente::class,"clientes_id");
    }
    protected function Merch(){
        return $this->belongsTo(Merch::class,"merch_id");
    }
}
