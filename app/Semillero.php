<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semillero extends Model
{
    protected $table = 'semilleros';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'tipoSemillero',
        'fechaCreacion',
        'imagen',
        'descripcion',
        'mision',
        'vision',
        'justificacion',
        'objetivoGeneral',
        'objetivosEspecificos',
        'logros',
        'estado',
    ];

    public function lineasInvestigacion()
    {
        return $this->belongsToMany('App\LineaInvestigacion', 'semillero_id', 'linea_investigacion_id');
    }

    public function proyectos()
    {
        return $this->belongsToMany('App\Proyecto', 'semillero_proyecto', 'semillero_id', 'proyecto_id');
    }

}
