<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fondo extends Model
{
    protected $table = 'fondos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imagen',
    ];
}
