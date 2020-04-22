<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\AprendizRequest;

use App\Aprendiz;
use App\ProgramaFormacion;

class AprendizController extends Controller
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
        $aprendices = Aprendiz::orderBy('nombre')->paginate(50);

        return view('aprendices.listar', compact('aprendices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programasFormacion = ProgramaFormacion::orderBy('nombre')->get();

        return view('aprendices.crear', compact('programasFormacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AprendizRequest $request)
    {
        $aprendiz = new Aprendiz;
        $aprendiz->nombre            = $request->get('nombre');
        $aprendiz->email             = $request->get('email');
        $aprendiz->password          = bcrypt($request->get('numeroDocumento'));
        $aprendiz->tipoDocumento     = $request->get('tipoDocumento');
        $aprendiz->numeroDocumento   = $request->get('numeroDocumento');
        $aprendiz->tipoVinculacion   = $request->get('tipoVinculacion');

        if ($request->hasFile('foto')) {
            $foto       = $request->file('foto');
            $rutaFoto   = Storage::putFileAs(
                'public/fotos_aprendices', $foto, $foto->getClientOriginalName()
            );

            $aprendiz->foto = "fotos_aprendices/{$foto->getClientOriginalName()}";
        }

        $aprendiz->numeroCelular    = $request->get('numeroCelular');
        $aprendiz->enlace_CvLac     = $request->get('enlace_CvLac');
        $aprendiz->estado           = $request->get('estado');
        $aprendiz->programaFormacion()->associate($request->get('programa_formacion_id'));
        $aprendiz->save();

        return redirect()->route('aprendices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $aprendiz = Aprendiz::findOrFail($id);
        //
        // return view('aprendices.ver', compact('aprendiz'));
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
        $aprendiz = Aprendiz::findOrFail($id);
        $programasFormacion = ProgramaFormacion::orderBy('nombre')->get();

        return view('aprendices.editar', compact('aprendiz', 'programasFormacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aprendiz = Aprendiz::findOrFail($id);
        $aprendiz->nombre                   = $request->get('nombre');
        $aprendiz->email                    = $request->get('email');
        $aprendiz->password                 = bcrypt($request->get('numeroDocumento'));
        $aprendiz->tipoDocumento            = $request->get('tipoDocumento');
        $aprendiz->numeroDocumento          = $request->get('numeroDocumento');
        $aprendiz->tipoVinculacion          = $request->get('tipoVinculacion');

        if ($request->hasFile('foto')) {
            $foto       = $request->file('foto');
            $rutaFoto   = Storage::putFileAs(
                'public/fotos_aprendices', $foto, $foto->getClientOriginalName()
            );

            $aprendiz->foto = "fotos_aprendices/{$foto->getClientOriginalName()}";
        }

        $aprendiz->numeroCelular            = $request->get('numeroCelular');
        $aprendiz->enlace_CvLac             = $request->get('enlace_CvLac');
        $aprendiz->estado                   = $request->get('estado');
        $aprendiz->programaFormacion()->associate($request->get('programa_formacion_id'));
        $aprendiz->save();

        return redirect()->route('aprendices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aprendiz::destroy($id);
        return redirect()->back()
            ->with('status', "El aprendiz ha sido eliminado con éxito.");
    }
}
