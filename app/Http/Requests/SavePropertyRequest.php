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
      return $this->user() ? $this->user()->isAdmin() : false ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
        "name" => "required",
        "lastname" => "",
        "document" => "required",
        "email" => "required",
        "phone" => "required",
        "password" => "",
        "is_admin" => "boolean",
        "is_driver" => "boolean",
        "available" => "boolean"
      ];
    }
}
