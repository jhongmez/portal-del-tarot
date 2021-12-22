<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if($this->method() === 'PUT') {
            return [
                'name'      => 'required',
                'email'     => 'required|email|unique:users,email,'.$this->id,
            ];
        } else {
            return [
                'name'      => 'required',
                'email'     => 'required|email|unique:users',
                'password'  => 'required|min:6|confirmed',
            ];
        }
    }

    public function messages() {
        return [
            'name.required'     => 'El campo "Nombre" es requerido',
            'email.required'    => 'El campo "Correo" es requerido',
            'email.unique'      => 'Este correo ya existe',
            'password.required' => 'El campo "Contraseña" es requerido',
            'password.confirmed'=> 'Las contraseñas no coinciden'
        ];
    }
}
