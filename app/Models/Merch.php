<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    protected $table = "merch";
    protected $primaryKey = "id";

    public $timestamps = true;

    protected $fillable =
        [
         "nombre", "imagen", "descripcion", "precio", "stock"
        ];
}
