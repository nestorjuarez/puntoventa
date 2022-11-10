<?php

namespace App\Http\Requests\Product;

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
            'name' => 'string|required|max:255|unique:products',
            'image' => 'required|dimensions:min_width=100,min_height=200',
            'sell_price' => 'required',
            'category_id' => 'integer|required|exists:App\Category,id',
            'provider_id' => 'integer|required|exists:App\Provider,id'
        ];
    }

     public function messages(){

        return [

            'name.string' => 'El valor no es correcto',
            'name.required' => 'El campo es requerido',
            'name.max' => 'Solo se permiten 255 caracteres',
            'name.unique' => 'El producto ya esta registrado',

            'image.required' => 'El campo es requerido',
            'image.dimensions' => 'Las imagen debe tener 100x200px',

            'sell_price.required' => 'El campo sellprice es requerido',

            'category_id.integer' => 'Debe ser un valor entero',
            'category_id.required' => 'El valor es requerido',
            'category_id.exists' => 'La categoria no existe',


            'provider_id.integer' => 'Debe ser un valor entero',
            'provider_id.required' => 'El valor es requerido',
            'provider_id.exists' => 'El proveedor  no existe'


        ];
    }
}
