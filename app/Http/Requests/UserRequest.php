<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'                => 'required|string|max:191',
            'email'                 => 'required|email|max:191|unique:users,email,'.$this->route('usuario').',id',
            'password'              => 'max:191',
            'tipoDocumento'         => 'required|max:191',
            'numeroDocumento'       => 'required|max:20|unique:users,numeroDocumento,'.$this->route('usuario').',id',
            'tipoVinculacion'       => 'required|max:191',
            'profesion'             => 'required|max:191',
            'foto'                  => 'nullable|image|max:2000',
            'numeroCelular'         => 'max:20',
            'enlace_CvLac'          => 'nullable|url|max:256',
            'dependencia'           => 'nullable|max:191',
            'estado'                => 'required|max:191',
        ];
    }
}
