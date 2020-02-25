<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        "order",
        "title",
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
        "title" => "string",
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

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function full_name()
    {
        return $this->categoria->text . ", " . $this->title;
    }
}
