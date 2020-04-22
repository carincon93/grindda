<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AliadoRequest extends FormRequest
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
                'nombre'    => 'required|max:196',
                'logo'      => 'required|image|max:800',
            ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'nombre'    => 'required|max:196',
                'logo'      => 'image|max:800',
            ];
                break;
            default:
                break;
        }
    }
}
