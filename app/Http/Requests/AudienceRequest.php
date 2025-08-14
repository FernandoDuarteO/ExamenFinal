<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AudienceRequest extends FormRequest
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
            'hearing_date' => 'required|date',
            'description' => 'required|string|min:4|max:255',
            'hall_id' => 'required'
        ];
    }

    public function messages(){
        return[
            'hearing_date.required' => 'La fecha de la audiencia es requerida.',
            'hearing_date.date' => 'La fecha de la audiencia debe ser una fecha válida.',

            'description.required' => 'La descripción es requerida.',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'description.min' => 'La descripción debe contener un mínimo de 4 caracteres.',
            'description.max' => 'La descripción debe contener un máximo de 255 caracteres.',

            'hall_id.required' => 'El nombre de la sala es requerido.'
        ];
    }
}
