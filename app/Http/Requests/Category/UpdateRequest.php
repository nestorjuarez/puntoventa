<?php

namespace App\Http\Requests\Category;

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
            'name' =>'required|string|max:50',
            'description' => 'string|max:255'
        ];
    }


     public function messages()
    {
        return [

            'name.required' => 'El campo es requerido',
            'name.string' => 'El dato debe ser string',
            'name.max' => 'No debe superar los 50 caracteres',
            'description.string'=>  'El dato debe ser string',
            'description.max' => 'No debe superar los 250 caracteres'
        ];
    }
}
