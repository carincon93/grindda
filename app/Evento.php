<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreEvento',
        'clasificacion',
        'descripcion',
        'lugar',
        'logros',
        'imagen',
        'miniatura',
        'estadoPublicacion',
        'fechaInicio',
        'fechaFin',
        'ano',
    ];

    public function archivos()
    {
        return $this->hasMany('App\EventoArchivo');
    }

    public function carouselItems()
    {
        return $this->hasMany('App\Carousel');
    }
}
