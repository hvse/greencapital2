<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      return true;//auth()->user() && auth()->user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
        "published" => "",
        "sold" => "",
        "codigo" => "",
        "operacion_id" => "",
        "dormitorios" => "",
        "caracteristicas_es" => "",
        "caracteristicas_en" => "",
        "categoria_id" => "",
        "banos" => "",
        "departamento_ciudad" => "",
        "area_de_servicio" => "",
        "zona" => "",
        "cochera" => "",
        "superficie_total" => "",
        "medida_id" => "",
        "precio" => "",
        "moneda_id" => "",
        "nota_es" => "",
        "nota_en" => "",
        "area_construida" => "",
        "cliente" => "",
        "agente_id" => "",
        "fotos" => "",
      ];
    }
}
