<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sectorproducto extends Model
{
    protected $fillable = [
        "sector_id",
        "producto_id"
    ];
}
