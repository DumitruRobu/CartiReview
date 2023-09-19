<?php

namespace App\Http\Requests\AllControllers;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestedBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id'=>"required|numeric",
            'titlu'=>"required|string",
            'autor'=>"required|string",
            'gen_id'=>"required|numeric",
            'descriere'=>"required|string",
            'imagine'=>"required|string",
        ];
    }
}
