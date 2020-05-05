<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\LineaInvestigacionRequest;

use App\User;
use App\LineaInvestigacion;

class LineaInvestigacionController extends Controller
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
        $lineasInvestigacion = LineaInvestigacion::orderBy('nombre')->paginate(50);

        return view('lineas_investigacion.listar', compact('lineasInvestigacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::orderBy('nombre')->get();

        return view('lineas_investigacion.crear', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LineaInvestigacionRequest $request)
    {
        $lineaInvestigacion = new LineaInvestigacion;
        $lineaInvestigacion->nombre         = $request->get('nombre');
        $lineaInvestigacion->fechaCreacion  = $request->get('fechaCreacion');
        $lineaInvestigacion->descripcion    = $request->get('descripcion');

        $imagen     = $request->file('imagen');
        $rutaFoto   = Storage::putFileAs(
            'public/imagenes_lineas_investigacion', $imagen, $imagen->getClientOriginalName()
        );

        $lineaInvestigacion->imagen     = "imagenes_lineas_investigacion/{$imagen->getClientOriginalName()}";
        $lineaInvestigacion->lider_id   = $request->get('lider_id');
        $lineaInvestigacion->estado     = $request->get('estado');
        $lineaInvestigacion->save();

        return redirect()->route('lineas_investigacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lineaInvestigacion = LineaInvestigacion::findOrFail($id);
        
        return view('lineas_investigacion.ver', compact('lineaInvestigacion'));
        // return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios           = User::orderBy('nombre')->get();
        $lineaInvestigacion = LineaInvestigacion::findOrFail($id);

        return view('lineas_investigacion.editar', compact('lineaInvestigacion', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LineaInvestigacionRequest $request, $id)
    {
        $lineaInvestigacion = LineaInvestigacion::findOrFail($id);
        $lineaInvestigacion->nombre         = $request->get('nombre');
        $lineaInvestigacion->fechaCreacion  = $request->get('fechaCreacion');
        $lineaInvestigacion->descripcion    = $request->get('descripcion');

        if ($request->hasFile('imagen')) {
            $imagen     = $request->file('imagen');
            $rutaFoto   = Storage::putFileAs(
                'public/imagenes_lineas_investigacion', $imagen, $imagen->getClientOriginalName()
            );
            $lineaInvestigacion->imagen     = "imagenes_lineas_investigacion/{$imagen->getClientOriginalName()}";
        }

        $lineaInvestigacion->lider_id   = $request->get('lider_id');
        $lineaInvestigacion->estado     = $request->get('estado');
        $lineaInvestigacion->save();

        return redirect()->route('lineas_investigacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LineaInvestigacion::destroy($id);
        return redirect()->back()
            ->with('status', "La línea de investigación ha sido eliminada con éxito.");
    }
}
