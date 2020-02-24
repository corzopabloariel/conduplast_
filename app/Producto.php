<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        "order",
        "text",
        "resume",
        "details",
        "features",
        "models",
        "images",
        "ficha",
        "mercadolibre",
        "elim",
        "categoria_id"
    ];

    protected $casts = [
        "order" => "string",
        "text" => "string",
        "resume" => "string",
        "details" => "string",
        "features" => "array",
        "models" => "array",
        "images" => "array",
        "ficha" => "array",
        "mercadolibre" => "string",
        "elim" => "boolean",
        "categoria_id" => "integer"
    ];
}