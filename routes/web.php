<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/panel', function () {
    return redirect('panel/usuarios');
});

Route::get('/', 'PaginaController@index');
Route::get('/informacion-general', 'PaginaController@informacionGeneral')->name('quienes_somos.informacion_general');
Route::get('/integrantes', 'PaginaController@integrantes')->name('quienes_somos.integrantes');
Route::get('/lineas-investigacion', 'PaginaController@lineasInvestigacion')->name('quienes_somos.lineas_investigacion');
Route::get('/evento/{ano}/{nombreEvento}', 'PaginaController@detallesEvento')->name('paginas.eventos');
Route::get('/evento/descargar/archivo/{id}', 'PaginaController@descargarArchivo')->name('eventos.descargar_archivo');
Route::get('/semillero/{nombreSemillero}', 'PaginaController@detallesSemillero')->name('semillero.detalle');


Route::get('/semilleros', 'PaginaController@semilleros')->name('semilleros');
Route::get('/eventos/{ano}', 'PaginaController@eventos')->name('eventos');
Route::get('/proyectos', 'PaginaController@proyectos')->name('proyectos');
// Route::get('/publicaciones', 'PaginaController@publicaciones')->name('publicaciones');
Route::get('/publicaciones/{tipo_publicacion}', 'PaginaController@publicaciones')->name('publicaciones');
Route::get('/publicacion/{id}/descargar', 'PublicacionController@descargar')->name('publicaciones.descargar');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/obtener_autores', 'UserController@obtenerAutores');

Route::prefix('panel')->group(function () {
    Route::resource('/usuarios', 'UserController')->parameters([
        'usuarios' => 'usuario'
    ]);
    Route::resource('/aliados', 'AliadoController')->parameters([
        'aliados' => 'aliado'
    ]);

    Route::delete('/eventos/eliminar-archivo/{id}', 'EventoController@eliminarArchivo')->name('archivos.destroy');

    Route::resource('/aplicaciones', 'AplicacionController')->parameters([
        'aplicaciones' => 'aplicacion'
    ]);
    Route::resource('/aprendices', 'AprendizController')->parameters([
        'aprendices' => 'aprendiz'
    ]);
    Route::resource('/carousel', 'CarouselController')->parameters([
        'carousel' => 'carousel'
    ]);
    Route::resource('/eventos', 'EventoController')->parameters([
        'eventos' => 'evento'
    ]);

    Route::get('/fondos/listar', 'PaginaController@listarFondos')->name('fondos.index');
    Route::get('/fondos/crear', 'PaginaController@agregarFondo')->name('fondos.create');
    Route::post('/fondos/crear', 'PaginaController@guardarFondo')->name('fondos.store');

    Route::resource('/grupos_investigacion', 'GrupoInvestigacionController')->parameters([
        'grupos_investigacion' => 'grupo_investigacion'
    ]);
    Route::resource('/lineas_investigacion', 'LineaInvestigacionController')->parameters([
        'lineas_investigacion' => 'linea_investigacion'
    ]);
    Route::resource('/proyectos', 'ProyectoController')->parameters([
        'proyectos' => 'proyecto'
    ]);
    Route::resource('/semilleros', 'SemilleroController')->parameters([
        'semilleros' => 'semillero'
    ]);
    Route::resource('/roles', 'RolController')->parameters([
        'roles' => 'rol'
    ]);
    Route::resource('/programas_formacion', 'ProgramaFormacionController')->parameters([
        'programas_formacion' => 'programa_formacion'
    ]);
    Route::resource('/publicaciones', 'PublicacionController')->parameters([
        'publicaciones' => 'publicacion'
    ]);
});
