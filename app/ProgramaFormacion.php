<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaFormacion extends Model
{
    protected $table = 'programas_formacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'tipoFormacion',
    ];

    public function aprendices()
    {
        return $this->hasMany('App\Aprendiz');
    }
}
