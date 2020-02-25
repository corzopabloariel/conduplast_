<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        "order",
        "resume",
        "text",
        "image",
        "elim"
    ];

    protected $casts = [
        "order" => "string",
        "resume" => "string",
        "text" => "string",
        "image" => "array",
        "elim" => "boolean"
    ];

    public function productos()
    {
        return $this->hasMany('App\Producto' , 'categoria_id' , 'id' );
    }
}
