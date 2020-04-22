<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AprendizRequest extends FormRequest
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
            'email'                 => 'required|email|max:191|unique:aprendices,email,'.$this->route('aprendiz').',id',
            'password'              => 'max:191',
            'tipoDocumento'         => 'required|max:191',
            'numeroDocumento'       => 'required|max:20|unique:aprendices,numeroDocumento,'.$this->route('aprendiz').',id',
            'tipoVinculacion'       => 'required|max:191',
            'foto'                  => 'nullable|image|max:2000',
            'numeroCelular'         => 'nullable|max:20',
            'enlace_CvLac'          => 'nullable|url|max:256',
            'estado'                => 'required|max:191',
            'programa_formacion_id' => 'required|max:10',
        ];
    }
}
