<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SemilleroRequest;

use Illuminate\Support\Facades\Storage;

use App\Semillero;

class SemilleroController extends Controller
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
        $semilleros = Semillero::orderBy('nombre')->paginate(50);

        return view('semilleros.listar', compact('semilleros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semilleros.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemilleroRequest $request)
    {
        $semillero = new Semillero;
        $semillero->nombre                  = $request->get('nombre');
        $semillero->tipoSemillero           = $request->get('tipoSemillero');
        $semillero->fechaCreacion           = $request->get('fechaCreacion');

        $imagen   = $request->file('imagen');
        $rutaImagen  = Storage::putFileAs(
            'public/logos_semilleros',
            $imagen,
            $imagen->getClientOriginalName()
        );

        $semillero->imagen                  = "logos_semilleros/{$imagen->getClientOriginalName()}";
        $semillero->descripcion             = $request->get('descripcion');
        $semillero->mision                  = $request->get('mision');
        $semillero->vision                  = $request->get('vision');
        $semillero->justificacion           = $request->get('justificacion');
        $semillero->objetivoGeneral         = $request->get('objetivoGeneral');
        $semillero->objetivosEspecificos    = $request->get('objetivosEspecificos');
        $semillero->logros                  = $request->get('logros');
        $semillero->save();

        return redirect()->route('semilleros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semillero = Semillero::findOrFail($id);

        return view('semilleros.detalle', compact('semillero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semillero = Semillero::findOrFail($id);
        return view('semilleros.editar', compact('semillero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SemilleroRequest $request, $id)
    {
        $semillero = Semillero::findOrFail($id);
        $semillero->nombre                  = $request->get('nombre');
        $semillero->tipoSemillero           = $request->get('tipoSemillero');
        $semillero->fechaCreacion           = $request->get('fechaCreacion');

        if ($request->hasFile('imagen')) {
            $imagen   = $request->file('imagen');
            $rutaImagen  = Storage::putFileAs(
                'public/logos_semilleros',
                $imagen,
                $imagen->getClientOriginalName()
            );
            $semillero->imagen                  = "logos_semilleros/{$imagen->getClientOriginalName()}";
        }

        $semillero->descripcion             = $request->get('descripcion');
        $semillero->mision                  = $request->get('mision');
        $semillero->vision                  = $request->get('vision');
        $semillero->justificacion           = $request->get('justificacion');
        $semillero->objetivoGeneral         = $request->get('objetivoGeneral');
        $semillero->objetivosEspecificos    = $request->get('objetivosEspecificos');
        $semillero->logros                  = $request->get('logros');
        $semillero->save();

        return redirect()->route('semilleros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Semillero::destroy($id);
        return redirect()->back()
            ->with('status', "El semillero ha sido eliminado con éxito.");
    }
}
