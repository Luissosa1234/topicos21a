<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedorPost extends FormRequest
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
            'nombre'=> 'required|min:5|max:500',
            'correo'=> 'required|min:5|max:500',
            'telefono'=> 'required|min:5|max:500',
            'direccion'=> 'required|min:5|max:500'
        ];
    }
}
