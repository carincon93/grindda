<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    protected $table = 'aprendices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'tipoDocumento',
        'numeroDocumento',
        'tipoVinculacion',
        'foto',
        'numeroCelular',
        'enlace_CvLac',
        'estado',
        'programa_formacion_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function programaFormacion()
    {
        return $this->belongsTo('App\ProgramaFormacion');
    }
}
