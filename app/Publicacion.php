<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicaciones';

    protected $fillable = [
        'nombre',
        'descripcion',
        'portada',
        'archivo',
        'tipo_publicacion'
    ];
}
