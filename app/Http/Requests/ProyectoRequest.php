<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
                'resultado'             => 'required',
                'lineaProgramatica'     => 'required|max:191',
                'fechaCreacion'         => 'required|date',
                'objetivoGeneral'       => 'required',
                'objetivosEspecificos'  => 'required',
                'imagen'                => 'required|image|max:800',
                'url'                   => 'nullable|url|max:256',
                'lider_id'              => 'required|max:10',
                'autor_id'              => 'required',
                'semillero_id'          => 'required',
                'estadoPublicacion'     => 'required|max:191',
            ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'nombre'                => 'required|max:191',
                'resultado'             => 'required',
                'lineaProgramatica'     => 'required|max:191',
                'fechaCreacion'         => 'required|date',
                'objetivoGeneral'       => 'required',
                'objetivosEspecificos'  => 'required',
                'imagen'                => 'image|max:800',
                'url'                   => 'nullable|url|max:256',
                'lider_id'              => 'required|max:10',
                'autor_id'              => 'required',
                'semillero_id'          => 'required',
                'estadoPublicacion'     => 'required|max:191',
            ];
                break;
            default:
                break;
        }
    }
}
