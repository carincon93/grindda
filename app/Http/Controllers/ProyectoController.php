<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequest;

use Illuminate\Support\Facades\Storage;

use App\User;
use App\Proyecto;
use App\Semillero;
use App\GrupoInvestigacion;

class ProyectoController extends Controller
{
    /**
     * Auth
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::orderBy('nombre')->paginate(50);

        return view('proyectos.listar', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios   = User::orderBy('nombre')->get();
        $semilleros = Semillero::orderBy('nombre')->get();

        return view('proyectos.crear', compact('usuarios', 'semilleros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {
        $proyecto = new Proyecto;
        $proyecto->nombre               = $request->get('nombre');
        $proyecto->resultado            = $request->get('resultado');
        $proyecto->lineaProgramatica    = $request->get('lineaProgramatica');
        $proyecto->fechaCreacion        = $request->get('fechaCreacion');
        $proyecto->objetivoGeneral      = $request->get('objetivoGeneral');
        $proyecto->objetivosEspecificos = $request->get('objetivosEspecificos');

        if ($request->hasFile('imagen')) {
            $imagen   = $request->file('imagen');
            $rutaImagen  = Storage::putFileAs(
                'public/imagenes_proyectos',
                $imagen,
                $imagen->getClientOriginalName()
            );
            $proyecto->imagen   = "imagenes_proyectos/{$imagen->getClientOriginalName()}";
        }

        $proyecto->url                  = $request->get('url');
        $proyecto->lider()->associate($request->get('lider_id'));
        $proyecto->estadoPublicacion    = $request->get('estadoPublicacion');
        $proyecto->save();
        $proyecto->autores()->sync($request->get('autor_id'));
        $proyecto->semilleros()->sync($request->get('semillero_id'));

        self::json();

        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        $proyecto->objetivosEspecificos = explode("-", $proyecto->objetivosEspecificos);
        return view('proyectos.detalle', compact('proyecto'));
        // return response()->json(compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto   = Proyecto::findOrFail($id);
        $usuarios   = User::orderBy('nombre')->get();
        $semilleros = Semillero::orderBy('nombre')->get();

        return view('proyectos.editar', compact('proyecto', 'usuarios', 'semilleros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyectoRequest $request, $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->nombre               = $request->get('nombre');
        $proyecto->resultado            = $request->get('resultado');
        $proyecto->lineaProgramatica    = $request->get('lineaProgramatica');
        $proyecto->fechaCreacion        = $request->get('fechaCreacion');
        $proyecto->objetivoGeneral      = $request->get('objetivoGeneral');
        $proyecto->objetivosEspecificos = $request->get('objetivosEspecificos');

        if ($request->hasFile('imagen')) {
            $imagen   = $request->file('imagen');
            $rutaImagen  = Storage::putFileAs(
                'public/imagenes_proyectos',
                $imagen,
                $imagen->getClientOriginalName()
            );
            $proyecto->imagen   = "imagenes_proyectos/{$imagen->getClientOriginalName()}";
        }

        $proyecto->url                  = $request->get('url');
        $proyecto->lider()->associate($request->get('lider_id'));
        $proyecto->estadoPublicacion    = $request->get('estadoPublicacion');
        $proyecto->save();
        $proyecto->autores()->sync($request->get('autor_id'));
        $proyecto->semilleros()->sync($request->get('semillero_id'));

        self::json();

        return redirect()->route('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        self::json();

        Proyecto::destroy($id);
        return redirect()->back()
            ->with('status', "El proyecto ha sido eliminado con éxito.");
    }

    public function json()
    {
        $proyectos          = Proyecto::orderBy('fechaCreacion')->get();
        $grupoInvestigacion = GrupoInvestigacion::where('nombre', 'GRINDDA')->first();

        $data = [
            "title" => [
                "media" => [
                    "url"       => "/storage/logos_grupos_investigacion/grindda-logo.png",
                    "caption"   => "Proyectos",
                    "credit"    => "GRINDDA"
                ],
                "text" => [
                    "headline"  => "GRINDDA<br/>",
                    "text"      => "<p>$grupoInvestigacion->descripcion</p>"
                ]
            ],
            "events" => [[]],
        ];

        foreach ($proyectos->where('estadoPublicacion', 'publicar') as $key => $proyecto) {
            $data['events'][$key] = [
                "media" => [
                    "url" => "/storage/{$proyecto->imagen}",
                    "caption" => strtoupper($proyecto->lineaProgramatica),
                    "credit" => "GRINDDA"
                ],
                "start_date" => [
                    "month" => date('m', strtotime($proyecto->fechaCreacion)),
                    "day" => date('d', strtotime($proyecto->fechaCreacion)),
                    "year" => date('Y', strtotime($proyecto->fechaCreacion))
                ],
                "text" => [
                    "headline" => "$proyecto->nombre<br/>",
                    "text" => "<p>$proyecto->objetivoGeneral</p>"
                ]
            ];
        }

        Storage::disk('public')->put('timeline/proyectos.json', json_encode($data));
    }
}
