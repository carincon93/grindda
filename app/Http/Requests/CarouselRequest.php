<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselRequest extends FormRequest
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
                'imagen'        => 'required|image|max:2000',
                'tipoItem'      => 'required|max:191',
                'descripcion'   => 'required_if:tipoItem,otro',
                'url'           => 'nullable|url',
                'evento_id'     => 'nullable',
            ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'imagen'        => 'image|max:2000',
                'tipoItem'      => 'required|max:191',
                'descripcion'   => 'required_if:tipoItem,otro',
                'url'           => 'nullable|url',
                'evento_id'     => 'nullable',
            ];
                break;
            default:
                break;
        }


    }
}
