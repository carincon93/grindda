<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PublicacionRequest;


use App\Publicacion;


class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('descargar');
    }


    public function index()
    {
        $publicaciones = Publicacion::orderBy('nombre')->paginate(50);

        return view('publicaciones.listar', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionRequest $request)
    {
        $publicacion = new Publicacion;
        $publicacion->nombre           = $request->get('nombre');
        $publicacion->descripcion      = $request->get('descripcion');
        $publicacion->tipo_publicacion = $request->get('tipo_publicacion');

        if ($request->hasFile('portada')) {
            $portada     = $request->file('portada');
            $rutaPortada = Storage::putFileAs(
                'public/publicaciones',
                $portada,
                $portada->getClientOriginalName()
            );

            $publicacion->portada = "publicaciones/{$portada->getClientOriginalName()}";
        }

        if ($request->hasFile('archivo')) {
            $archivo       = $request->file('archivo');
            $rutaArchivo   = Storage::putFileAs(
                'public/publicaciones',
                $archivo,
                $archivo->getClientOriginalName()
            );

            $publicacion->archivo = "publicaciones/{$archivo->getClientOriginalName()}";
        }

        $publicacion->save();

        return redirect()->route('publicaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        return view('publicaciones.detalle', compact('publicacion'));
        return response()->json(compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);

        return view('publicaciones.editar', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PublicacionRequest $request, $id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->nombre           = $request->get('nombre');
        $publicacion->descripcion      = $request->get('descripcion');
        $publicacion->tipo_publicacion = $request->get('tipo_publicacion');

        if ($request->hasFile('portada')) {
            Storage::delete($publicacion->portada);
            $portada     = $request->file('portada');

            $rutaPortada = Storage::putFileAs(
                'public/publicaciones',
                $portada,
                $portada->getClientOriginalName()
            );

            $publicacion->portada = "publicaciones/{$portada->getClientOriginalName()}";
        }

        if ($request->hasFile('archivo')) {
            $archivo       = $request->file('archivo');
            Storage::delete($publicacion->archivo);
            $rutaArchivo   = Storage::putFileAs(
                'public/publicaciones',
                $archivo,
                $archivo->getClientOriginalName()
            );

            $publicacion->archivo = "publicaciones/{$archivo->getClientOriginalName()}";
        }
        $publicacion->save();

        return redirect()->route('publicaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function descargar($id)
    {
        $publicacion    = Publicacion::findOrFail($id);

        $pathToFile     = storage_path("app/public/{$publicacion->archivo}");
        if (file_exists($pathToFile)) {

            $extension      = '.' . pathinfo($pathToFile)['extension'];
            $nombreArchivo  = $publicacion->nombre . $extension;

            return response()->download($pathToFile, $nombreArchivo);
        }

        return redirect()->back()->with('status-danger', 'El archivo no existe');
    }
}
