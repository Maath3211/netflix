<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class personneRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required',
            'date' => 'required',
            'sexe' => 'required',
            'photo' => 'required|image|mimes:png,jpeg,jpg,gif|max:4096',
            
        ];
    }
    public function messages(){
        return [
        'nom.required' => "Le nom est obligatoire",
        'date.required' => "La date est obligatoire",
        ];
    }
}
