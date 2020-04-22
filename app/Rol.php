<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'permisos',
    ];

    protected $casts = [
       'permisos' => 'array',
   ];

    public function usuarios()
    {
        return $this->belongsToMany('App\User', 'rol_usuario', 'rol_id', 'user_id');
    }

    public function hasAccess(array $permisos) : bool
    {
        foreach ($permisos as $permiso) {
            if ($this->hasPermission($permiso))
                return true;
        }
        return false;
    }

    private function hasPermission(string $permiso) : bool
    {
        return $this->permisos[$permiso] ?? false;
    }
}
