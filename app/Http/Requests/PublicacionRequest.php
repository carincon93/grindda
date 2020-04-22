<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacionRequest extends FormRequest
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
                'descripcion'           => 'required|max:191',
                'portada'               => 'nullable|image|max:2000',
                'archivo'               => 'required|mimetypes:application/pdf|file|max:80000',
                'tipo_publicacion'      => 'required|max:191'
            ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'nombre'                => 'required|max:191',
                'descripcion'           => 'required|max:191',
                'portada'               => 'nullable|image|max:2000',
                'archivo'               => 'mimetypes:application/pdf|file|max:80000',
                'tipo_publicacion'      => 'required|max:191'
            ];
                break;
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'nombre.required'                   => 'El nombre es obligatorio',
            'nombre.max'                        => 'El nombre no puede superar los 191 caracteres',
            'descripcion.required'              => 'La descripción es obligatoria',
            'descripcion.max'                   => 'La descripción no puede superar los 191 caracteres',
            'archivo.required'                  => 'El archivo es obligatorio',
            'archivo.max'                       => 'El archivo no puede pesar más de 8000 KB',
            'tipo_publicacion.required'         => 'El tipo de publicación es obligatorio',
            'tipo_publicacion.max'              => 'El tipo de publicación no puede superar los 191 caracteres'
        ];
    }
}
