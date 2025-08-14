<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
            'address' => 'required|string|min:10|max:255',
            'identification_card' => ['required','string','min:16',Rule::unique('customers')->ignore($this->customer)],
            'phone_number' => ['required','string','min:8',Rule::unique('customers')->ignore($this->customer)],
            'place_birth' => 'required|string|min:4|max:255',
            'department' => 'required|string|min:4|max:255',
            'country' => 'required|string|min:5|max:255',
            'marital_status' => 'required|string|min:5|max:25'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'El nombre del cliente es requerido.',
            'name.string' => 'El nombre del cliente debe contener solo caracteres.',
            'name.min' => 'El nombre del cliente debe contener un mínimo de 8 caracteres.',
            'name.max' => 'El nombre del cliente debe contener un máximo de 255 caracteres.',

            'age.required' => 'La edad del cliente es requerida.',
            'age.string' => 'La edad del cliente debe ser una cadena de texto.',
            'age.min' => 'La edad del cliente debe contener un mínimo de 2 caracteres.',
            'age.max' => 'La edad del cliente debe contener un máximo de 3 caracteres.',

            'gender.required' => 'El género del cliente es requerido.',
            'gender.string' => 'El género del cliente debe ser una cadena de texto.',
            'gender.min' => 'El género del cliente debe contener un mínimo de 8 caracteres.',
            'gender.max' => 'El género del cliente debe contener un máximo de 10 caracteres.',

            'identification_card.required' => 'La cédula de identidad del cliente es requerida.',
            'identification_card.string' => 'La cédula de identidad del cliente debe ser una cadena de texto.',
            'identification_card.unique' => 'La cédula de identidad del cliente debe ser única.',
            'identification_card.min' => 'La cédula de identidad del cliente debe contener un mínimo de 16 caracteres.',

            'phone_number.required' => 'El número de teléfono del cliente es requerido.',
            'phone_number.string' => 'El número de teléfono del cliente debe ser una cadena de texto.',
            'phone_number.unique' => 'El número de teléfono del cliente debe ser único.',
            'phone_number.min' => 'El número de teléfono del cliente debe contener un mínimo de 8 caracteres.',

            'address.required' => 'La dirección del cliente es requerida.',
            'address.string' => 'La dirección del cliente debe ser una cadena de texto.',
            'address.min' => 'La dirección del cliente debe contener un mínimo de 10 caracteres.',
            'address.max' => 'La dirección del cliente debe contener un máximo de 255 caracteres.',

            'place_birth.required' => 'El lugar de nacimiento del cliente es requerido.',
            'place_birth.string' => 'El lugar de nacimiento del cliente debe ser una cadena de texto.',
            'place_birth.min' => 'El lugar de nacimiento del cliente debe contener un mínimo de 4 caracteres.',
            'place_birth.max' => 'El lugar de nacimiento del cliente debe contener un máximo de 255 caracteres.',

            'department.required' => 'El departamento del cliente es requerido.',
            'department.string' => 'El departamento del cliente debe ser una cadena de texto.',
            'department.min' => 'El departamento del cliente debe contener un mínimo de 4 caracteres.',
            'department.max' => 'El departamento del cliente debe contener un máximo de 255 caracteres.',

            'country.required' => 'El país del cliente es requerido.',
            'country.string' => 'El país del cliente debe ser una cadena de texto.',
            'country.min' => 'El país del cliente debe contener un mínimo de 5 caracteres.',
            'country.max' => 'El país del cliente debe contener un máximo de 255 caracteres.',

            'marital_status.required' => 'El estado civil del cliente es requerido.',
            'marital_status.string' => 'El estado civil del cliente debe ser una cadena de texto.',
            'marital_status.min' => 'El estado civil del cliente debe contener un mínimo de 5 caracteres.',
            'marital_status.max' => 'El estado civil del cliente debe contener un máximo de 25 caracteres.'
        ];
    }
}