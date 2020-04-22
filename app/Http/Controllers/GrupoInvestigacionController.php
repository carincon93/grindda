<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\GrupoInvestigacionRequest;

use App\GrupoInvestigacion;

class GrupoInvestigacionController extends Controller
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
        $gruposInvestigacion = GrupoInvestigacion::orderBy('nombre')->paginate(50);

        return view('grupos_investigacion.listar', compact('gruposInvestigacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos_investigacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoInvestigacionRequest $request)
    {
        $grupoInvestigacion = new GrupoInvestigacion;
        $grupoInvestigacion->nombre         = $request->get('nombre');
        $grupoInvestigacion->descripcion    = $request->get('descripcion');
        $grupoInvestigacion->que_hacemos    = $request->get('que_hacemos');
        $grupoInvestigacion->objetivo       = $request->get('objetivo');
        $grupoInvestigacion->mision         = $request->get('mision');
        $grupoInvestigacion->vision         = $request->get('vision');

        $logo     = $request->file('logo');
        $rutaLogo   = Storage::putFileAs(
            'public/logos_grupos_investigacion', $logo, $logo->getClientOriginalName()
        );

        $grupoInvestigacion->logo     = "logos_grupos_investigacion/{$logo->getClientOriginalName()}";
        $grupoInvestigacion->save();

        return redirect()->route('grupos_investigacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupoInvestigacion = GrupoInvestigacion::findOrFail($id);

        return view('grupos_investigacion.ver', compact('grupoInvestigacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $grupoInvestigacion = GrupoInvestigacion::findOrFail($id);
        //
        // return view('grupos_investigacion.editar', compact('grupoInvestigacion'));
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GrupoInvestigacionRequest $request, $id)
    {
        $grupoInvestigacion = GrupoInvestigacion::findOrFail($id);
        $grupoInvestigacion->nombre         = $request->get('nombre');
        $grupoInvestigacion->descripcion    = $request->get('descripcion');
        $grupoInvestigacion->que_hacemos    = $request->get('que_hacemos');
        $grupoInvestigacion->objetivo       = $request->get('objetivo');
        $grupoInvestigacion->mision         = $request->get('mision');
        $grupoInvestigacion->vision         = $request->get('vision');

        if ($request->hasFile('logo')) {
            $logo       = $request->file('logo');
            $rutaLogo   = Storage::putFileAs(
                'public/logos_grupos_investigacion', $logo, $logo->getClientOriginalName()
            );

            $grupoInvestigacion->logo     = "logos_grupos_investigacion/{$logo->getClientOriginalName()}";
        }

        $grupoInvestigacion->save();

        return redirect()->route('grupos_investigacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GrupoInvestigacion::destroy($id);
        return redirect()->back()
            ->with('status', "El grupo de investigación ha sido eliminado con éxito.");
    }
}
