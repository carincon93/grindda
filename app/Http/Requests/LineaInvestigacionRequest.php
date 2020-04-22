<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LineaInvestigacionRequest extends FormRequest
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
                'nombre'        => 'required|string|max:191',
                'fechaCreacion' => 'required|date|date_format:Y-m-d|',
                'descripcion'   => 'required',
                'imagen'        => 'required|image|max:2000',
                'lider_id'      => 'required|max:10',
                'estado'        => 'required|max:191',
            ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'nombre'        => 'required|string|max:191',
                'fechaCreacion' => 'required|date|date_format:Y-m-d|',
                'descripcion'   => 'required',
                'imagen'        => 'image|max:2000',
                'lider_id'      => 'required|max:10',
                'estado'        => 'required|max:191',
            ];
                break;
            default:
                break;
        }

    }
}
