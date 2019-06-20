<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MerchRequest extends FormRequest
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
            "nombre" => "required|string",
            /*"tipo_habitaciones_id" => "required|exists:tipo_habitaciones,id",*/
            "descripcion" => "string|max:200",
            "precio" => "required",
            "stock" => "boolean|required",
            "imagen" => "file|mimes:jpeg,png",
        ];

    }

    public function messages()
    {
        return [
            "tipo_habitaciones_id.required" => "El campo tipo habitaciones es obligatorio",
            "tipo_habitaciones_id.exists" => "El campo tipo habitaciones no coincide con uno de la lista",
        ];
    }
}
