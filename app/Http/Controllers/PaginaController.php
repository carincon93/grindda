<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\User;
use App\Fondo;
use App\Evento;
use App\Carousel;
use App\Proyecto;
use App\Semillero;
use App\Aplicacion;
use App\Publicacion;
use App\EventoArchivo;
use App\GrupoInvestigacion;
use App\LineaInvestigacion;

class PaginaController extends Controller
{
    public function index()
    {
        $investigadores = User::orderBy('nombre')->get();
        $carouselItems  = Carousel::all();
        $fondo          = Fondo::where('id', 1)->first();

        return view('welcome', compact('investigadores', 'carouselItems', 'fondo'));
    }

    public function informacionGeneral()
    {
        $grupoInvestigacion = GrupoInvestigacion::where('nombre', 'GRINDDA')->firstOrFail();
        $fondo              = Fondo::where('id', 1)->first();

        return view('pagina.quienes_somos.informacion_general', compact('grupoInvestigacion', 'fondo'));
    }

    public function integrantes()
    {
        $integrantes = User::where('estado','activo')->orderBy('id')->get();

        return view('pagina.quienes_somos.integrantes', compact('integrantes'));
    }

    public function lineasInvestigacion()
    {
        $lineasInvestigacion = LineaInvestigacion::orderBy('nombre')->get();

        return view('pagina.quienes_somos.lineas_investigacion', compact('lineasInvestigacion'));
    }

    public function semilleros()
    {
        $semilleros = Semillero::orderBy('nombre')->get();

        return view('pagina.semilleros', compact('semilleros'));
    }

    public function detallesSemillero($nombreSemillero)
    {
        $semillero = Semillero::where('nombre', str_replace('-', ' ', $nombreSemillero))->firstOrFail();

        dd($semillero);

        // return view('pagina.semilleros.ver', compact('semillero'));
    }

    public function eventos($ano)
    {
        $eventos = Evento::whereRaw("YEAR(eventos.fechaFin) = {$ano}")->get();

        return view('pagina.eventos.listar', compact('eventos'));
    }

    public function detallesEvento($ano, $nombreEvento)
    {
        $evento = Evento::where('nombreEvento', str_replace('-', ' ', $nombreEvento))->where('ano', $ano)->firstOrFail();

        return view('pagina.eventos.ver', compact('evento'));
    }

    public function descargarArchivo($id)
    {
        $archivo    = EventoArchivo::findOrFail($id);

        if ($archivo->archivo == null) {
            $rutaArchivo = 'none';
        } else {
            $rutaArchivo = $archivo->archivo;
        }
        $pathToFile     = storage_path("app/{$rutaArchivo}");

        if (file_exists($pathToFile)) {

            $extension      = '.'.pathinfo($pathToFile)['extension'];
            $nombreArchivo  = $archivo->nombre.$extension;

            return response()->download($pathToFile, $nombreArchivo);
        }

        return redirect()->back()->with('status-danger', 'El archivo no existe');
    }


    public function proyectos()
    {
        $proyectos = Proyecto::orderBy('nombre')->get();

        return view('pagina.proyectos', compact('proyectos'));
    }

    public function publicaciones($tipo_publicacion)
    {
        $publicaciones = Publicacion::orderBy('nombre')->where('tipo_publicacion', $tipo_publicacion)->get();

        return view('pagina.publicaciones', compact('publicaciones', 'tipo_publicacion'));
    }

    /**
     * [agregarFondo editarFondo description]
     * @return [type] [description]
     */
    public function listarFondos()
    {
        $fondos = Fondo::all();

        return view('pagina.fondos.listar', compact('fondos'));
    }

    public function agregarFondo()
    {
        return view('pagina.fondos.crear');
    }

    public function guardarFondo(Request $request)
    {
        if ($request->hasFile('imagen')) {
            $imagen     = $request->file('imagen');
            $rutaImagen = Storage::putFileAs(
                'public/fondos', $imagen, $imagen->getClientOriginalName()
            );
        }

        Fondo::updateOrCreate(
            [
                'id' => 1,
            ], [
                'imagen' => $rutaImagen,
            ]);


        // $fondo->save();

        return redirect()->route('fondos.index');
    }
}
