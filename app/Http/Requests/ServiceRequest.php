<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                'title'         => 'required',
                'image'         => 'image',
            ];
        } else {
            return [
                'title'         => 'required',
                'image'         => 'required|image',
            ];
        }
    
    }

    public function messages() {
        return [
            'title.required' =>  'El campo "Autor del testimonio" es requerido',
            'image.required' =>  'El campo "Imagen" es requerido',
            'image.image'    =>  'Debe de ser una Imagen',
        ];
    }
}
