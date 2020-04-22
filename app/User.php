<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
        'profesion',
        'foto',
        'numeroCelular',
        'enlace_CvLac',
        'dependencia',
        'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function lineaInvestigacion()
    {
        return $this->hasOne('App\LineaInvestigacion');
    }

    public function lineasInvestigacion()
    {
        return $this->belongsToMany('App\LineaInvestigacion', 'linea_investigacion_usuario', 'user_id', 'linea_investigacion_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Rol', 'rol_usuario', 'user_id', 'rol_id');
    }

    public function liderProyectos()
    {
        return $this->hasMany('App\Proyecto', 'lider_id');
    }

    public function proyectos()
    {
        return $this->belongsToMany('App\Proyecto', 'proyecto_autor', 'autor_id', 'proyecto_id');
    }

    public function scopeObtenerAutores($query)
    {
        return $query->select('*')->from('users');
    }

    /**
    * Verificar si User tiene acceso mediante $permisos.
    */
    public function hasAccess(array $permisos) : bool
    {
        // check if the permissions is available in any role
        foreach ($this->roles as $rol) {
            if($rol->hasAccess($permisos)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole(string $rolSlug)
    {
        return $this->roles()->where('slug', $rolSlug)->count() == 1;
    }
}
