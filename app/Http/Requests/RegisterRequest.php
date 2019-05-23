<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name_nutriologist' => 'required',
            'email' => 'required|email',
            'no_registry' => 'required',
            'identification_card' => 'required',
            'name_nutriologist' => 'required',
            'password' => 'min:6|confirmed'

        ];
    }

    public function messages() 
    {
        return[
            'name_nutriologist.required' => 'Ingrese el nombre del nutriologo',
            'email.required' => 'Ingrese un correo electrónico',
            'email.email' => 'Ingrese un correo valido',
            'no_registry.required' => 'Ingrese su número de registro',
            'identification_card.required' => 'Ingrese su cédula profesional',
            'password.min' => 'La contraseña debe ser mínimo de 6 caracteres',
            'password.confirmed' => 'Las contraseñas ingresadas no coinciden'
        ];
    }
}
