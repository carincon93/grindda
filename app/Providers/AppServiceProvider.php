<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

use App\Aplicacion;
use App\Evento;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Route::resourceVerbs([
            'create'    => 'crear',
            'edit'      => 'editar',
        ]);

        // Using Closure based composers...
        View::composer('layouts.app', function ($view) {

            $view->with('aplicaciones', Aplicacion::orderBy('nombre')->get())->with('ano', Evento::selectRaw('DISTINCT(YEAR(eventos.fechaFin)) as ano')->orderBy('ano')->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
