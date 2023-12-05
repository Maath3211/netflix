<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usagerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
            return [
                'email' => 'required',
                'nomUsager' => 'required',
                'nom' => 'required',
                'prenom' => 'required',
                'role' => 'required',
                'password' => 'sometimes|required',
                'image' => 'required|image|mimes:png,jpeg,jpg,gif|max:4096',
            ];
    }
}
