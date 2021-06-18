<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoPost extends FormRequest
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
            'nombre'=> 'required|min:5|max:50',
            'precio'=> '',
            'cantidad' => '',
            'departamento'=> 'required|min:5|max:50',
            'descripcion'=> 'required|min:5|max:50'
        ];
    }
}
