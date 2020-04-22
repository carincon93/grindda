<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoArchivo extends Model
{
    protected $table = 'evento_archivo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'url',
        'informacion',
        'archivo',
        'evento_id',
    ];

    public function evento()
    {
        return $this->belongsTo('App\Evento');
    }

}
