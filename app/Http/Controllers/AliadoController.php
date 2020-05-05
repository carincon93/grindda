<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\AliadoRequest;

use App\Aliado;

class AliadoController extends Controller
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
        $aliados = Aliado::orderBy('nombre')->paginate(50);

        return view('aliados.listar', compact('aliados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aliados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AliadoRequest $request)
    {
        $aliado = new Aliado;

        $logo   = $request->file('logo');
        $rutaLogo  = Storage::putFileAs(
            'public/logos_aliados', $logo, $logo->getClientOriginalName()
        );

        $aliado->nombre = $request->get('nombre');
        $aliado->logo   = "logos_aliados/{$logo->getClientOriginalName()}";
        $aliado->save();

        return redirect()->route('aliados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $aliado = Aliado::findOrFail($id);
        //
        // return view('aliados.ver', compact('aliado'));
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
        $aliado = Aliado::findOrFail($id);

        return view('aliados.editar', compact('aliado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AliadoRequest $request, $id)
    {
        $aliado = Aliado::findOrFail($id);

        if ($request->hasFile('logo')) {
            $logo   = $request->file('logo');
            $rutaLogo  = Storage::putFileAs(
                'public/logos_aliados', $logo, $logo->getClientOriginalName()
            );
            $aliado->logo   = "logos_aliados/{$logo->getClientOriginalName()}";
        }

        $aliado->nombre = $request->get('nombre');
        $aliado->save();

        return redirect()->route('aliados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aliado::destroy($id);
        return redirect()->back()
            ->with('status', "El aliado ha sido eliminado con éxito.");
    }
}
