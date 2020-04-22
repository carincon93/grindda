<?php

namespace App\Providers;

use App\Aliado;
use App\Aplicacion;
use App\Aprendiz;
use App\Evento;
use App\GrupoInvestigacion;
use App\LineaInvestigacion;
use App\ProgramaFormacion;
use App\Proyecto;
use App\Publicacion;
use App\Rol;
use App\Semillero;
use App\User;


use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerAliadoPolicies();
        $this->registerAplicacionPolicies();
        $this->registerAprendizPolicies();
        $this->registerEventoPolicies();
        $this->registerGrupoInvestigacionPolicies();
        $this->registerLineaInvestigacionPolicies();
        $this->registerProgramaFormacionPolicies();
        $this->registerProyectoPolicies();
        $this->registerPublicacionPolicies();
        $this->registerRolPolicies();
        $this->registerSemilleroPolicies();
        $this->registerUserPolicies();
    }

    public function registerAliadoPolicies()
    {
        Gate::define('crear-aliado', function ($user) {
            return $user->hasAccess(['crear-aliado']);
        });
        Gate::define('ver-aliado', function ($user) {
            return $user->hasAccess(['ver-aliado']);
        });
        Gate::define('editar-aliado', function ($user) {
            return $user->hasAccess(['editar-aliado']);
        });
        Gate::define('eliminar-aliado', function ($user) {
            return $user->hasAccess(['eliminar-aliado']);
        });
    }

    public function registerAplicacionPolicies()
    {
        Gate::define('crear-aplicacion', function ($user) {
            return $user->hasAccess(['crear-aplicacion']);
        });
        Gate::define('ver-aplicacion', function ($user) {
            return $user->hasAccess(['ver-aplicacion']);
        });
        Gate::define('editar-aplicacion', function ($user) {
            return $user->hasAccess(['editar-aplicacion']);
        });
        Gate::define('eliminar-aplicacion', function ($user) {
            return $user->hasAccess(['eliminar-aplicacion']);
        });
    }

    public function registerAprendizPolicies()
    {
        Gate::define('crear-aprendiz', function ($user) {
            return $user->hasAccess(['crear-aprendiz']);
        });
        Gate::define('ver-aprendiz', function ($user) {
            return $user->hasAccess(['ver-aprendiz']);
        });
        Gate::define('editar-aprendiz', function ($user) {
            return $user->hasAccess(['editar-aprendiz']);
        });
        Gate::define('eliminar-aprendiz', function ($user) {
            return $user->hasAccess(['eliminar-aprendiz']);
        });
    }

    public function registerEventoPolicies()
    {
        Gate::define('crear-evento', function ($user) {
            return $user->hasAccess(['crear-evento']);
        });
        Gate::define('ver-evento', function ($user) {
            return $user->hasAccess(['ver-evento']);
        });
        Gate::define('editar-evento', function ($user) {
            return $user->hasAccess(['editar-evento']);
        });
        Gate::define('eliminar-evento', function ($user) {
            return $user->hasAccess(['eliminar-evento']);
        });
    }

    public function registerGrupoInvestigacionPolicies()
    {
        Gate::define('crear-grupo-investigacion', function ($user) {
            return $user->hasAccess(['crear-grupo-investigacion']);
        });
        Gate::define('ver-grupo-investigacion', function ($user) {
            return $user->hasAccess(['ver-grupo-investigacion']);
        });
        Gate::define('editar-grupo-investigacion', function ($user) {
            return $user->hasAccess(['editar-grupo-investigacion']);
        });
        Gate::define('eliminar-grupo-investigacion', function ($user) {
            return $user->hasAccess(['eliminar-grupo-investigacion']);
        });
    }

    public function registerLineaInvestigacionPolicies()
    {
        Gate::define('crear-linea-investigacion', function ($user) {
            return $user->hasAccess(['crear-linea-investigacion']);
        });
        Gate::define('ver-linea-investigacion', function ($user) {
            return $user->hasAccess(['ver-linea-investigacion']);
        });
        Gate::define('editar-linea-investigacion', function ($user) {
            return $user->hasAccess(['editar-linea-investigacion']);
        });
        Gate::define('eliminar-linea-investigacion', function ($user) {
            return $user->hasAccess(['eliminar-linea-investigacion']);
        });
    }

    public function registerProgramaFormacionPolicies()
    {
        Gate::define('crear-programa-formacion', function ($user) {
            return $user->hasAccess(['crear-programa-formacion']);
        });
        Gate::define('ver-programa-formacion', function ($user) {
            return $user->hasAccess(['ver-programa-formacion']);
        });
        Gate::define('editar-programa-formacion', function ($user) {
            return $user->hasAccess(['editar-programa-formacion']);
        });
        Gate::define('eliminar-programa-formacion', function ($user) {
            return $user->hasAccess(['eliminar-programa-formacion']);
        });
    }

    public function registerProyectoPolicies()
    {
        Gate::define('crear-proyecto', function ($user) {
            return $user->hasAccess(['crear-proyecto']);
        });
        Gate::define('ver-proyecto', function ($user) {
            return $user->hasAccess(['ver-proyecto']);
        });
        Gate::define('editar-proyecto', function ($user) {
            return $user->hasAccess(['editar-proyecto']);
        });
        Gate::define('eliminar-proyecto', function ($user) {
            return $user->hasAccess(['eliminar-proyecto']);
        });
    }

    public function registerPublicacionPolicies()
    {
        Gate::define('crear-publicacion', function ($user) {
            return $user->hasAccess(['crear-publicacion']);
        });
        Gate::define('ver-publicacion', function ($user) {
            return $user->hasAccess(['ver-publicacion']);
        });
        Gate::define('editar-publicacion', function ($user) {
            return $user->hasAccess(['editar-publicacion']);
        });
        Gate::define('eliminar-publicacion', function ($user) {
            return $user->hasAccess(['eliminar-publicacion']);
        });
    }

    public function registerRolPolicies()
    {
        Gate::define('crear-rol', function ($user) {
            return $user->hasAccess(['crear-rol']);
        });
        Gate::define('ver-rol', function ($user) {
            return $user->hasAccess(['ver-rol']);
        });
        Gate::define('editar-rol', function ($user) {
            return $user->hasAccess(['editar-rol']);
        });
        Gate::define('eliminar-rol', function ($user) {
            return $user->hasAccess(['eliminar-rol']);
        });
    }

    public function registerSemilleroPolicies()
    {
        Gate::define('crear-semillero', function ($user) {
            return $user->hasAccess(['crear-semillero']);
        });
        Gate::define('ver-semillero', function ($user) {
            return $user->hasAccess(['ver-semillero']);
        });
        Gate::define('editar-semillero', function ($user) {
            return $user->hasAccess(['editar-semillero']);
        });
        Gate::define('eliminar-semillero', function ($user) {
            return $user->hasAccess(['eliminar-semillero']);
        });
    }

    public function registerUserPolicies()
    {
        Gate::define('crear-usuario', function ($user) {
            return $user->hasAccess(['crear-usuario']);
        });
        Gate::define('ver-usuario', function ($user) {
            return $user->hasAccess(['ver-usuario']);
        });
        Gate::define('editar-usuario', function ($user) {
            return $user->hasAccess(['editar-usuario']);
        });
        Gate::define('eliminar-usuario', function ($user) {
            return $user->hasAccess(['eliminar-usuario']);
        });
    }
}
