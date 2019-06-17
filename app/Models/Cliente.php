<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $primaryKey = "id";

    public $timestamps = true;

    protected $fillable =
        [
         "nombre","apellido","email"
        ];

    protected function getFullNameAttribute(){
        return $this->attributes["nombre"] . " " .
            $this->attributes["apellido"];
    }

    protected function Compra (){
        return $this->belongsToMany(Merch::class,"compras",
            "merch_id","clientes_id")->withPivot("metodo_pago");
    }
}
