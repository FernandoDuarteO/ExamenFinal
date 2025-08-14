<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JudgeRequest extends FormRequest
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
            'name' => 'required|string|min:8|max:255',
            'age' => 'required|string|min:2|max:3',
            'gender' => 'required|string|min:8|max:10',
            'identification_card' => ['required','string','min:16',Rule::unique('judges')->ignore($this->judge)],
            'phone_number' => ['required','string','min:8',Rule::unique('judges')->ignore($this->judge)],
            'email' => ['required','string','min:10','max:255',Rule::unique('judges')->ignore($this->judge)],
            'place_birth' => 'required|string|min:4|max:255',
            'department' => 'required|string|min:4|max:255',
            'residence' => 'required|string|min:4|max:255',
            'country' => 'required|string|min:5|max:255',
            'marital_status' => 'required|string|min:3|max:25'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del juez es requerido.',
            'name.string' => 'El nombre del juez debe contener solo caracteres.',
            'name.min' => 'El nombre del juez debe contener un mínimo de 8 caracteres.',
            'name.max' => 'El nombre del juez debe contener un máximo de 255 caracteres.',

            'age.required' => 'La edad del juez es requerida.',
            'age.integer' => 'La edad del juez debe ser un número entero.',
            'age.min' => 'La edad del juez debe contener un mínimo de 2 caracteres.',
            'age.max' => 'La edad del juez debe contener un máximo de 3 caracteres.',

            'gender.required' => 'El género del juez es requerido.',
            'gender.string' => 'El género del juez debe contener solo caracteres.',
            'gender.min' => 'El género del juez debe contener un mínimo de 8 caracteres.',
            'gender.max' => 'El género del juez debe contener un máximo de 10 caracteres.',

            'identification_card.required' => 'La identificacion del juez es requerida.',
            'identification_card.string' => 'La identificacion del juez debe contener solo caracteres.',
            'identification_card.unique' => 'La identificacion del juez debe ser unico.',
            'identification_card.min' => 'La identificacion del juez debe contener un minimo de caracteres de 16.',

            'telephone.required' => 'El telefono del juez debe ser requerido.',
            'telephone.string' => 'El telefono del juez debe contener solo caracteres.',
            'telephone.min' => 'El telefono del juez debe contener un minimo de caracteres de 8.',

            'email.required' => 'El email del juez es requerido.',
            'email.string' => 'El email del juez debe contener solo caracteres.',
            'email.unique' => 'El email del juez debe ser unico.',
            'email.min' => 'El email del juez debe contener un minimo de caracteres de 10.',
            'email.max' => 'El email del juez debe contener un maximo de caracteres de 255.',

            'place_birth.required' => 'El lugar de nacimiento del juez es requerido.',
            'place_birth.string' => 'El lugar de nacimiento del juez debe contener solo caracteres.',
            'place_birth.min' => 'El lugar de nacimiento del juez debe contener un minimo de caracteres de 4.',
            'place_birth.max' => 'El lugar de nacimiento del juez debe contener un maximo de caracteres de 255.',

            'department.required' => 'El departamento del juez es requerido.',
            'department.string' => 'El departamento del juez debe contener solo caracteres.',
            'department.min' => 'El departamento del juez debe contener un minimo de caracteres de 4.',
            'department.max' => 'El departamento del juez debe contener un maximo de caracteres de 255.',

            'residence.required' => 'La residencia del juez es requerida.',
            'residence.string' => 'La residencia del juez debe contener solo caracteres.',
            'residence.min' => 'La residencia del juez debe contener un minimo de caracteres de 4.',
            'residence.max' => 'La residencia del juez debe contener un maximo de caracteres de 255.',

            'country.required' => 'El pais del juez es requerido.',
            'country.string' => 'El pais del juez debe contener solo caracteres.',
            'country.min' => 'El pais del juez debe contener un minimo de caracteres de 5.',
            'country.max' => 'El pais del juez debe contener un maximo de caracteres de 255.',

            'marital_status.required' => 'El estado civil del juez es requerido.',
            'marital_status.string' => 'El estado civil del juez debe contener solo caracteres.',
            'marital_status.min' => 'El estado civil del juez debe contener un minimo de caracteres de 5.',
            'marital_status.max' => 'El estado civil del juez debe contener un maximo de caracteres de 25.',
        ];
    }
}
