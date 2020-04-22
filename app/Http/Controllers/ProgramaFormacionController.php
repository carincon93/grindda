<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProgramaFormacionRequest;

use App\ProgramaFormacion;

class ProgramaFormacionController extends Controller
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
        $programasFormacion = ProgramaFormacion::orderBy('nombre')->paginate(50);

        return view('programas_formacion.listar', compact('programasFormacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programas_formacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaFormacionRequest $request)
    {
        $programaFormacion = new ProgramaFormacion;
        $programaFormacion->nombre          = $request->get('nombre');
        $programaFormacion->tipoFormacion   = $request->get('tipoFormacion');
        $programaFormacion->save();

        return redirect()->route('programas_formacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $programaFormacion = ProgramaFormacion::findOrFail($id);
        //
        // return view('programas_formacion.ver', compact('programaFormacion'));
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programaFormacion = ProgramaFormacion::findOrFail($id);

        return view('programas_formacion.editar', compact('programaFormacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramaFormacionRequest $request, $id)
    {
        $programaFormacion = ProgramaFormacion::findOrFail($id);
        $programaFormacion->nombre          = $request->get('nombre');
        $programaFormacion->tipoFormacion   = $request->get('tipoFormacion');
        $programaFormacion->save();

        return redirect()->route('programas_formacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProgramaFormacion::destroy($id);
        return redirect()->back()
            ->with('status', "El programa de formación ha sido eliminado con éxito.");
    }
}
