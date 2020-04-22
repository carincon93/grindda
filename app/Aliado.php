<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    protected $table = 'aliados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'logo',
    ];
}
