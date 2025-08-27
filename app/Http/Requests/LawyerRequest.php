<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LawyerRequest extends FormRequest
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
            'identification_card' => ['required','string','min:16',Rule::unique('lawyers')->ignore($this->lawyer)],
            'phone_number' => ['required','string','min:8',Rule::unique('lawyers')->ignore($this->lawyer)],
            'email' => ['required','string','min:10','max:255',Rule::unique('lawyers')->ignore($this->lawyer)],
            'professional_code' => ['required','string','min:5','max:45',Rule::unique('lawyers')->ignore($this->lawyer)],
            'place_birth' => 'required|string|min:4|max:255',
            'department' => 'required|string|min:3|max:255',
            'residence' => 'required|string|min:4|max:255',
            'ethnicity' => 'required|string|min:4|max:255',
            'address' => 'required|string|min:4|max:255',
            'nationality' => 'required|string|min:4|max:255',
            'country' => 'required|string|min:5|max:255',
            'marital_status' => 'required|string|min:5|max:25'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'El nombre del abogado es requerido.',
            'name.string' => 'El nombre del abogado debe contener solo caracteres.',
            'name.min' => 'El nombre del abogado debe contener un mínimo de 8 caracteres.',
            'name.max' => 'El nombre del abogado debe contener un máximo de 255 caracteres.',

            'age.required' => 'La edad del abogado es requerida.',
            'age.string' => 'La edad del abogado debe ser una cadena de texto.',
            'age.min' => 'La edad del abogado debe contener un mínimo de 2 caracteres.',
            'age.max' => 'La edad del abogado debe contener un máximo de 3 caracteres.',

            'gender.required' => 'El género del abogado es requerido.',
            'gender.string' => 'El género del abogado debe ser una cadena de texto.',
            'gender.min' => 'El género del abogado debe contener un mínimo de 8 caracteres.',
            'gender.max' => 'El género del abogado debe contener un máximo de 10 caracteres.',

            'identification_card.required' => 'La cédula de identidad del abogado es requerida.',
            'identification_card.string' => 'La cédula de identidad del abogado debe ser una cadena de texto.',
            'identification_card.unique' => 'La cédula de identidad del abogado debe ser única.',
            'identification_card.min' => 'La cédula de identidad del abogado debe contener un mínimo de 16 caracteres.',

            'phone_number.required' => 'El número de teléfono del abogado es requerido.',
            'phone_number.string' => 'El número de teléfono del abogado debe ser una cadena de texto.',
            'phone_number.unique' => 'El número de teléfono del abogado debe ser único.',
            'phone_number.min' => 'El número de teléfono del abogado debe contener un mínimo de 8 caracteres.',

            'email.required' => 'El correo electrónico del abogado es requerido.',
            'email.string' => 'El correo electrónico del abogado debe ser una cadena de texto.',
            'email.unique' => 'El correo electrónico del abogado debe ser único.',
            'email.min' => 'El correo electrónico del abogado debe contener un mínimo de 10 caracteres.',
            'email.max' => 'El correo electrónico del abogado debe contener un máximo de 255 caracteres.',

            'professional_code.required' => 'El código profesional del abogado es requerido.',
            'professional_code.string' => 'El código profesional del abogado debe ser una cadena de texto.',
            'professional_code.unique' => 'El código profesional del abogado debe ser único.',
            'professional_code.min' => 'El código profesional del abogado debe contener un mínimo de 5 caracteres.',
            'professional_code.max' => 'El código profesional del abogado debe contener un máximo de 45 caracteres.',

            'place_birth.required' => 'El lugar de nacimiento del abogado es requerido.',
            'place_birth.string' => 'El lugar de nacimiento del abogado debe ser una cadena de texto.',
            'place_birth.min' => 'El lugar de nacimiento del abogado debe contener un mínimo de 4 caracteres.',
            'place_birth.max' => 'El lugar de nacimiento del abogado debe contener un máximo de 255 caracteres.',

            'department.required' => 'El departamento del abogado es requerido.',
            'department.string' => 'El departamento del abogado debe ser una cadena de texto.',
            'department.min' => 'El departamento del abogado debe contener un mínimo de 3 caracteres.',
            'department.max' => 'El departamento del abogado debe contener un máximo de 255 caracteres.',

            'residence.required' => 'La residencia del abogado es requerida.',
            'residence.string' => 'La residencia del abogado debe ser una cadena de texto.',
            'residence.min' => 'La residencia del abogado debe contener un mínimo de 4 caracteres.',
            'residence.max' => 'La residencia del abogado debe contener un máximo de 255 caracteres.',

            'ethnicity.required' => 'La etnia del abogado es requerida.',
            'ethnicity.string' => 'La etnia del abogado debe ser una cadena de texto.',
            'ethnicity.min' => 'La etnia del abogado debe contener un mínimo de 4 caracteres.',
            'ethnicity.max' => 'La etnia del abogado debe contener un máximo de 255 caracteres.',

            'address.required' => 'La dirección del abogado es requerida.',
            'address.string' => 'La dirección del abogado debe ser una cadena de texto.',
            'address.min' => 'La dirección del abogado debe contener un mínimo de 4 caracteres.',
            'address.max' => 'La dirección del abogado debe contener un máximo de 255 caracteres.',

            'nationality.required' => 'La nacionalidad del abogado es requerida.',
            'nationality.string' => 'La nacionalidad del abogado debe ser una cadena de texto.',
            'nationality.min' => 'La nacionalidad del abogado debe contener un mínimo de 4 caracteres.',
            'nationality.max' => 'La nacionalidad del abogado debe contener un máximo de 255 caracteres.',

            'country.required' => 'El país del abogado es requerido.',
            'country.string' => 'El país del abogado debe ser una cadena de texto.',
            'country.min' => 'El país del abogado debe contener un mínimo de 5 caracteres.',
            'country.max' => 'El país del abogado debe contener un máximo de 255 caracteres.',

            'marital_status.required' => 'El estado civil del abogado es requerido.',
            'marital_status.string' => 'El estado civil del abogado debe ser una cadena de texto.',
            'marital_status.min' => 'El estado civil del abogado debe contener un mínimo de 5 caracteres.',
            'marital_status.max' => 'El estado civil del abogado debe contener un máximo de 25 caracteres.'
        ];
    }
}
