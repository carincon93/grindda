<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'resultado',
        'lineaProgramatica',
        'fechaCreacion',
        'objetivoGeneral',
        'objetivosEspecificos',
        'imagen',
        'url',
        'lider_id',
        'estadoPublicacion',
    ];

    public function lider()
    {
        return $this->belongsTo('App\User');
    }

    public function autores()
    {
        return $this->belongsToMany('App\User', 'proyecto_autor', 'proyecto_id', 'autor_id');
    }

    public function semilleros()
    {
        return $this->belongsToMany('App\Semillero', 'semillero_proyecto', 'proyecto_id', 'semillero_id');
    }
}
