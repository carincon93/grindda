<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\EventoRequest;

use App\Evento;
use App\EventoArchivo;

class EventoController extends Controller
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
        $eventos = Evento::orderBy('clasificacion')->paginate(50);

        return view('eventos.listar', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoRequest $request)
    {
        $evento = new Evento;
        $evento->nombreEvento   = $request->get('nombreEvento');
        $evento->clasificacion  = $request->get('clasificacion');
        $evento->descripcion    = $request->get('descripcion');
        $evento->lugar          = $request->get('lugar');
        $evento->logros         = $request->get('logros');

        if ($request->hasFile('imagen')) {
            $imagen     = $request->file('imagen');
            $rutaFoto   = Storage::putFileAs(
                'public/eventos/', $imagen, $imagen->getClientOriginalName()
            );

            $evento->imagen = "imagenes_eventos/{$imagen->getClientOriginalName()}";
        }
        if ($request->hasFile('miniatura')) {
            $miniatura     = $request->file('miniatura');
            $rutaMiniatura = Storage::putFileAs(
                'public/eventos/miniaturas', $miniatura, $miniatura->getClientOriginalName()
            );

            $evento->miniatura = "eventos//miniaturas/{$miniatura->getClientOriginalName()}";
        }

        $evento->estadoPublicacion  = $request->get('estadoPublicacion');
        $evento->fechaInicio        = $request->get('fechaInicio');
        $evento->fechaFin           = $request->get('fechaFin');
        $evento->ano                = $request->get('ano');
        $evento->save();

        if ($request->has('titulo')) {
            self::adjuntarArchivoUrl($request, $evento);
        }

        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $evento = Evento::findOrFail($id);
        //
        // return view('eventos.ver', compact('evento'));
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
        $evento = Evento::findOrFail($id);

        return view('eventos.editar', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventoRequest $request, $id)
    {
        $evento = Evento::findOrFail($id);;
        $evento->nombreEvento   = $request->get('nombreEvento');
        $evento->clasificacion  = $request->get('clasificacion');
        $evento->descripcion    = $request->get('descripcion');
        $evento->lugar          = $request->get('lugar');
        $evento->logros         = $request->get('logros');

        if ($request->hasFile('imagen')) {
            $imagen     = $request->file('imagen');
            $rutaFoto   = Storage::putFileAs(
                'public/eventos/', $imagen, $imagen->getClientOriginalName()
            );

            $evento->imagen = "imagenes_eventos/{$imagen->getClientOriginalName()}";
        }
        if ($request->hasFile('miniatura')) {
            $miniatura     = $request->file('miniatura');
            $rutaMiniatura = Storage::putFileAs(
                'public/eventos/miniaturas', $miniatura, $miniatura->getClientOriginalName()
            );

            $evento->miniatura = "eventos/miniaturas/{$miniatura->getClientOriginalName()}";
        }

        $evento->estadoPublicacion  = $request->get('estadoPublicacion');
        $evento->fechaInicio        = $request->get('fechaInicio');
        $evento->fechaFin           = $request->get('fechaFin');
        $evento->ano                = $request->get('ano');
        $evento->save();

        if ($request->has('titulo')) {
            self::adjuntarArchivoUrl($request, $evento);
        }

        return redirect()->route('eventos.index');
    }

    function adjuntarArchivoUrl($request, $evento)
    {
        $rutaArchivo = [];
        if ($request->hasFile('archivo')) {
            foreach($request->file('archivo') as $file) {
                $rutaArchivo[]  = Storage::putFile(
                    'public/eventos/archivos', $file
                );
            }
        }
        for($i = 0; $i < count($request->get('titulo')); $i++) {
            $data = array(
                'titulo'        => $request->get('titulo')[$i],
                'url'           => $request->get('url')[$i],
                'informacion'   => $request->get('informacion')[$i],
                'archivo'       => !empty($rutaArchivo) == true ? $rutaArchivo[$i] : null,
                'evento_id'     => $evento->id,
            );
            $insertData[] = $data;
        }
        EventoArchivo::insert($insertData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        foreach ($evento->archivos as $key => $archivo) {
            Storage::delete($archivo->archivo);
        }
        Storage::delete($evento->imagen);
        Storage::delete($evento->miniatura);
        $evento->destroy($id);
        return redirect()->back()
            ->with('status', "El evento ha sido eliminado con éxito.");
    }

    public function eliminarArchivo($id)
    {
        $archivo = EventoArchivo::findOrFail($id);
        Storage::delete($archivo->archivo);
        $archivo->destroy($id);

        return redirect()->back()
            ->with('status', "El archivo ha sido eliminado con éxito.");
    }
}
