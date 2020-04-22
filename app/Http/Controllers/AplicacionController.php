<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AplicacionRequest;

use App\Aplicacion;

class AplicacionController extends Controller
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
        $aplicaciones = Aplicacion::orderBy('nombre')->paginate(50);

        return view('aplicaciones.listar', compact('aplicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aplicaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AplicacionRequest $request)
    {
        $aplicacion = new Aplicacion;
        $aplicacion->nombre = $request->get('nombre');
        $aplicacion->url    = $request->get('url');
        $aplicacion->save();

        return redirect()->route('aplicaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aplicacion = Aplicacion::findOrFail($id);
        
        return view('aplicaciones.ver', compact('aplicacion'));
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
        $aplicacion = Aplicacion::findOrFail($id);

        return view('aplicaciones.editar', compact('aplicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AplicacionRequest $request, $id)
    {
        $aplicacion = Aplicacion::findOrFail($id);
        $aplicacion->nombre = $request->get('nombre');
        $aplicacion->url    = $request->get('url');
        $aplicacion->save();

        return redirect()->route('aplicaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aplicacion::destroy($id);
        return redirect()->back()
            ->with('status', "La aplicación ha sido eliminada con éxito.");
    }
}
