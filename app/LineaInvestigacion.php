<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaInvestigacion extends Model
{
    protected $table = 'lineas_investigacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'fechaCreacion',
        'descripcion',
        'imagen',
        'lider_id',
        'estado',
    ];

    public function lider()
    {
        return $this->belongsTo('App\User', 'lider_id');
    }

    public function integrantes()
    {
        return $this->belongsToMany('App\User', 'linea_investigacion_usuario', 'linea_investigacion_id', 'user_id');
    }

    public function semilleros()
    {
        return $this->belongsToMany('App\Semillero', 'linea_investigacion_id', 'semillero_id');
    }
}
