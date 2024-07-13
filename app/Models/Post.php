<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";

    protected function casts():Array{
        return[
            "publicado_el"=>"datetime",
            "activo"=>"boolean"
        ];
    }

    protected function titulo():Attribute{
        return Attribute::make(
            set: function($value){
                return strtolower($value);      //Convierte una cadena a minúsculas
            },
            get: function($value){
                return ucfirst($value);         //Devuelve una cadena con la primera letra en mayúscula
            }
        );



    }
}
