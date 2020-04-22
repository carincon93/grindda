<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RolRequest;

use App\Rol;

class RolController extends Controller
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
        $roles = Rol::orderBy('nombre')->paginate(50);

        return view('roles.listar', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolRequest $request)
    {
        $permisos           = $request->get('permisos');
        $truesPermisos      = [];
        $truesPermisos      = array_pad($truesPermisos, count($permisos), true);
        $permisos           = array_combine($permisos, $truesPermisos);
        json_encode($permisos);

        $rol = new Rol;
        $rol->nombre      = $request->get('nombre');
        $rol->slug        = str_slug($request->get('nombre'));
        $rol->descripcion = $request->get('descripcion');
        $rol->permisos    = $permisos;
        $rol->save();

        return redirect()->route('roles.index')
            ->with('status', "El rol ha sido creado con éxito.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $rol = Rol::findOrFail($id);
        //
        // return view('roles.ver', 'rol');
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
        $rol = Rol::findOrFail($id);

        return view('roles.editar', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolRequest $request, $id)
    {
        $permisos           = $request->get('permisos');
        $truesPermisos      = [];
        $truesPermisos      = array_pad($truesPermisos, count($permisos), true);
        $permisos           = array_combine($permisos, $truesPermisos);
        json_encode($permisos);

        $rol = Rol::findOrFail($id);
        $rol->nombre      = $request->get('nombre');
        $rol->slug        = str_slug($request->get('nombre'));
        $rol->descripcion = $request->get('descripcion');
        $rol->permisos    = $permisos;
        $rol->save();

        return redirect()->route('roles.index')
            ->with('status', "El rol ha sido creado con éxito.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rol::destroy($id);
        return redirect()->back()
            ->with('status', "El rol ha sido eliminado con éxito.");
    }
}
