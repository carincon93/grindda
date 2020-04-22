<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use Illuminate\Support\Facades\Storage;

use App\User;

class UserController extends Controller
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
        $usuarios = User::orderBy('nombre')->paginate(50);

        return view('usuarios.listar', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $usuario = new User;
        $usuario->nombre           = $request->get('nombre');
        $usuario->email            = $request->get('email');
        $usuario->password         = bcrypt($request->get('numeroDocumento'));
        $usuario->tipoDocumento    = $request->get('tipoDocumento');
        $usuario->numeroDocumento  = $request->get('numeroDocumento');
        $usuario->tipoVinculacion  = $request->get('tipoVinculacion');
        $usuario->profesion        = $request->get('profesion');

        if ($request->hasFile('foto')) {
            $foto       = $request->file('foto');
            $rutaFoto   = Storage::putFileAs(
                'public/fotos_usuarios', $foto, $foto->getClientOriginalName()
            );

            $usuario->foto = "fotos_usuarios/{$foto->getClientOriginalName()}";
        }

        $usuario->numeroCelular    = $request->get('numeroCelular');
        $usuario->enlace_CvLac     = $request->get('enlace_CvLac');
        $usuario->dependencia      = $request->get('dependencia');
        $usuario->estado           = $request->get('estado');
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $usuario = User::findOrFail($id);
        //
        // return view('usuarios.ver', compact('usuario'));
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
        $usuario = User::findOrFail($id);

        return view('usuarios.editar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->nombre           = $request->get('nombre');
        $usuario->email            = $request->get('email');
        $usuario->password         = bcrypt($request->get('numeroDocumento'));
        $usuario->tipoDocumento    = $request->get('tipoDocumento');
        $usuario->numeroDocumento  = $request->get('numeroDocumento');
        $usuario->tipoVinculacion  = $request->get('tipoVinculacion');
        $usuario->profesion        = $request->get('profesion');

        if ($request->hasFile('foto')) {
            $foto       = $request->file('foto');
            $rutaFoto   = Storage::putFileAs(
                'public/fotos_usuarios', $foto, $foto->getClientOriginalName()
            );

            $usuario->foto = "fotos_usuarios/{$foto->getClientOriginalName()}";
        }

        $usuario->numeroCelular    = $request->get('numeroCelular');
        $usuario->enlace_CvLac     = $request->get('enlace_CvLac');
        $usuario->dependencia      = $request->get('dependencia');
        $usuario->estado           = $request->get('estado');
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()
            ->with('status', "El usuario ha sido eliminado con éxito.");
    }

    public function obtenerAutores()
    {
        return User::obtenerAutores()->orderBy('nombre')->get();
    }
}
