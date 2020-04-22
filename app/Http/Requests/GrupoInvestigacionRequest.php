<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoInvestigacionRequest extends FormRequest
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
                'nombre'        => 'required|max:191',
                'descripcion'   => 'required',
                'que_hacemos'   => 'required',
                'objetivo'      => 'required',
                'mision'        => 'required',
                'vision'        => 'required',
                'logo'          => 'required|image|max:800',
            ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'nombre'        => 'required|max:191',
                'descripcion'   => 'required',
                'que_hacemos'   => 'required',
                'objetivo'      => 'required',
                'mision'        => 'required',
                'vision'        => 'required',
                'logo'          => 'image|max:800',
            ];
                break;
            default:
                break;
        }
    }
}
