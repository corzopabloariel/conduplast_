<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = "sectores";
    protected $fillable = [
        "order",
        "text",
        "title",
        "images",
        "productos_id",
        "elim"
    ];

    protected $casts = [
        "order" => "string",
        "text" => "string",
        "title" => "string",
        "images" => "array",
        "productos_id" => "array",
        "elim" => "boolean"
    ];
}
