<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre'            => ['required', 'string', 'max:191'],
            'email'             => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password'          => ['required', 'string', 'min:6', 'confirmed'],
            'tipoDocumento'     => ['required', 'max:191'],
            'numeroDocumento'   => ['required', 'max:20', 'unique:users'],
            'tipoVinculacion'   => ['required', 'max:191'],
            'profesion'         => ['required', 'max:191'],
            'foto'              => ['max:800'],
            'numeroCelular'     => ['max:20'],
            'enlace_CvLac'      => ['nullable', 'url', 'max:256'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (array_key_exists('foto', $data)) {
            $foto = $data['foto'];
            Storage::putFileAs(
                'public/fotos_usuarios', $foto, $foto->getClientOriginalName()
            );

            $foto = "fotos_usuarios/{$foto->getClientOriginalName()}";
        } else {
            $foto = null;
        }

        return User::create([
            'nombre'            => $data['nombre'],
            'email'             => $data['email'],
            'password'          => Hash::make($data['password']),
            'tipoDocumento'     => $data['tipoDocumento'],
            'numeroDocumento'   => $data['numeroDocumento'],
            'tipoVinculacion'   => $data['tipoVinculacion'],
            'profesion'         => $data['profesion'],
            'foto'              => $foto,
            'numeroCelular'     => $data['numeroCelular'],
            'enlace_CvLac'      => $data['enlace_CvLac'],
            'estado'            => 'activo',
        ]);
    }
}
