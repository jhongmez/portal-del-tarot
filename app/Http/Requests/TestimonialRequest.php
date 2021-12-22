<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            //
            'description'  => 'required',
            'nameAuthor'   => 'required',
        ];
    }

    public function messages() {
        return [
            'description.required' => 'El campo "Descripción" es requerido',
            'nameAuthor.required' =>  'El campo "Autor del testimonio" es requerido',
        ];
    }
}
