<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imagen',
        'tipo',
        'descripcion',
        'url',
        'evento_id',
    ];

    public function evento()
    {
        return $this->belongsTo('App\Evento');
    }
}
