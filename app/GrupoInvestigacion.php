<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoInvestigacion extends Model
{
    protected $table = 'grupos_investigacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'que_hacemos',
        'objetivo',
        'mision',
        'vision',
        'logo',
    ];
}
