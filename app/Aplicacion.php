<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplicacion extends Model
{
    protected $table = 'aplicaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'url',
    ];
}
