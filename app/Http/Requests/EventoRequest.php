<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
                'nombreEvento'      => 'required|max:191',
                'clasificacion'     => 'required|max:191',
                'descripcion'       => 'required',
                'lugar'             => 'required|max:191',
                'logros'            => 'required',
                'imagen'            => 'required|image|max:2000',
                'miniatura'         => 'required|image|max:2000',
                'estadoPublicacion' => 'required|max:191',
                'fechaInicio'       => 'required|date|date_format:Y-m-d',
                'fechaFin'          => 'required|date|date_format:Y-m-d',
                'ano'               => 'required|max:4',

                'titulo'            => 'max:191',
                'archivo'           => 'max:2000',
                'archivo'           => 'nullable',
                'url'               => 'nullable',
            ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'nombreEvento'      => 'required|max:191',
                'clasificacion'     => 'required|max:191',
                'descripcion'       => 'required',
                'lugar'             => 'required|max:191',
                'logros'            => 'required',
                'imagen'            => 'image|max:2000',
                'miniatura'         => 'image|max:2000',
                'estadoPublicacion' => 'required|max:191',
                'fechaInicio'       => 'required|date|date_format:Y-m-d',
                'fechaFin'          => 'required|date|date_format:Y-m-d',
                'ano'               => 'required|max:4',

                'titulo'            => 'max:191',
                'archivo'           => 'max:2000',
                'archivo'           => 'nullable',
                'url'               => 'nullable',
            ];
                break;
            default:
                break;
        }

    }
}
