<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        'name' =>'string|required|max:255',
        'dni' =>'string|required|min:8|max:8|unique:clients,dni,'.$this->route('clients')->id,
        'cuil' =>'string|min:11|max:11|unique:clients,cuil,'.$this->route('clients')->id,
        'address' =>'string|max:255',
        'email' =>'string|email:rfc,dns|max:255|unique:clients,email,'.$this->route('clients')->id,
        'phone' =>'string|required|max:15'
        ];
    }

    public function message()
    {
        return [

            'name.required'=> 'El campo es requerido',
            'name.string'=> 'El valor no es correcto',
            'name.max'=> 'solo se permite 255 caracteres',

            'dni.string'=> 'El valor no es correcto',
            'dni.required'=> 'El campo es requerido',
            'dni.min'=> 'solo se permite 8 caracteres',
            'dni.max'=> 'solo se permite 8 caracteres',
            'dni.unique'=> 'El dni ya existe',

            'cuil.string'=> 'El valor no es correcto',
            'cuil.min'=> 'solo se permite 11 caracteres',
            'cuil.max'=> 'solo se permite 11 caracteres',
            'cuil.unique'=> 'el cuil ya se encuentra registrado',

            'address.string'=> 'El valor no es correcto',
            'address.max'=> 'solo se permite 255 caracteres',

            'email.string'=> 'El valor no es correcto',
            'email.email'=> 'No es un correo Electronico valido',
            'email.max'=> 'solo se permite 255 caracteres',
            'email.unique'=> 'El email ya se encuentra registrado',

            'phone.required'=> 'El campo es requerido',
            'phone.string'=> 'El valor no es correcto',
            'phone.max'=> 'solo se permite 15 caracteres'

        ],
    }
}
