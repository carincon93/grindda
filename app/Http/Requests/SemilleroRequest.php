<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SemilleroRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
            return [
                'nombre'                => 'required|max:191',
                'tipoSemillero'         => 'required|max:191',
                'fechaCreacion'         => 'required|date',
                'imagen'                => 'required|image|max:800',
                'descripcion'           => 'required',
                'mision'                => 'required',
                'vision'                => 'required',
                'justificacion'         => 'required',
                'objetivoGeneral'       => 'required',
                'objetivosEspecificos'  => 'required',
                'logros'                => 'required',
            ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'nombre'                => 'required|max:191',
                'tipoSemillero'         => 'required|max:191',
                'fechaCreacion'         => 'required|date',
                'imagen'                => 'image|max:800',
                'descripcion'           => 'required',
                'mision'                => 'required',
                'vision'                => 'required',
                'justificacion'         => 'required',
                'objetivoGeneral'       => 'required',
                'objetivosEspecificos'  => 'required',
                'logros'                => 'required',
            ];
                break;
            default:
                break;
        }

    }
}
