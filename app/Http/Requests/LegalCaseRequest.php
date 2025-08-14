<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LegalCaseRequest extends FormRequest
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
            'number_file' => ['required','string','min:4','max:45',Rule::unique('legal_cases')->ignore($this->legal_case)],
            'type_case' => 'required|string|min:4|max:255',
            'opening_date' => 'required|datetime',
            'current_status' => 'required|string|min:4|max:255',
            'description' => 'required|string|min:4|max:255',

            'audience_id' => 'required',
            'hall_id' => 'required',
            'stage_id' => 'required',
            'customer_id' => 'required',
            'lawyer_id' => 'required'
        ];
    }

    public function messages(){
        return [
            'number_file.required' => 'El número de expediente es obligatorio.',
            'number_file.string' => 'El número de expediente debe ser una cadena de texto.',
            'number_file.unique' => 'El número de expediente debe ser único.',
            'number_file.min' => 'El número de expediente debe tener al menos 4 caracteres.',
            'number_file.max' => 'El número de expediente no puede exceder los 45 caracteres.',

            'type_case.required' => 'El tipo de caso es obligatorio.',
            'type_case.string' => 'El tipo de caso debe ser una cadena de texto.',
            'type_case.min' => 'El tipo de caso debe tener al menos 4 caracteres.',
            'type_case.max' => 'El tipo de caso no puede exceder los 255 caracteres.',

            'opening_date.required' => 'La fecha de apertura es obligatoria.',
            'opening_date.datetime' => 'La fecha de apertura debe ser una fecha válida.',

            'current_status.required' => 'El estado actual es obligatorio.',
            'current_status.string' => 'El estado actual debe ser una cadena de texto.',
            'current_status.min' => 'El estado actual debe tener al menos 4 caracteres.',
            'current_status.max' => 'El estado actual no puede exceder los 255 caracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'description.min' => 'La descripción debe tener al menos 4 caracteres.',
            'description.max' => 'La descripción no puede exceder los 255 caracteres.',

            'audience_id.required' => 'La fecha de la audiencia es obligatoria.',
            'hall_id.required' => 'El nombre del salón es obligatorio.',
            'stage_id.required' => 'Los archivos de la etapa son obligatorios.',
            'customer_id.required' => 'El nombre del cliente es obligatorio.',
            'lawyer_id.required' => 'El nombre del abogado es obligatorio.'
        ];
    }
}
