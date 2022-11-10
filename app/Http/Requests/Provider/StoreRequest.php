<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
           'name' => 'required|string|max:255',
           'email' => 'email|string|max:200|unique:providers',
           'cuit' =>'required|string|max:11|min:11|unique:providers',
           'address' =>'required|string|max:255',
           'phone' =>'required|string|max:9|min:9|unique:providers'
        ];
    }

    public function messages(){

        return [

            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permite 255 caracteres',

            'email.email' => 'No es un correo electronico valido',
            'email.string' => 'El valor no es correcto',
            'email.max' => 'Solo se permite 200 caracteres',
            'email.unique' => 'El mail debe ser unico',

            'cuit.required' => 'Este campo es requerido',
            'cuit.string' => 'El valor no es correcto',
            'cuit.max' => 'Solo se permiten 11 caracteres',
            'cuit.min' => 'El minimo son 11 caracteres',
            'cuit.unique' => 'Debe ser unico',

            'address.string' => 'El valor no es correcto',
            'address.max' => 'Solo se permiten 255 caracteres',

            'phone.required' => 'Este campo es requerido',
            'phone.string' => 'El valor no es correcto',
            'phone.max' => 'Solo se permite 9 caracteres',
            'phone.min' => 'El minimo son 9 caracteres',
            'phone.unique' => 'El telefono ya existe'


        ];
    }
}
