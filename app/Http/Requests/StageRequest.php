<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StageRequest extends FormRequest
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
            'document_type' => 'required',
            'description' => 'required|string|min:10|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'case_date' => 'required|datetime'
        ];
    }
    public function messages(){
        return[
            'document_type.required' => 'El tipo de documento es obligatorio.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'description.min' => 'La descripción debe tener al menos 10 caracteres.',
            'description.max' => 'La descripción no puede exceder los 255 caracteres.',

            'file.required' => 'El archivo es obligatorio.',
            'file.file' => 'El archivo debe ser un archivo válido.',
            'file.mimes' => 'El archivo debe ser un PDF, DOC o DOCX.',
            'file.max' => 'El archivo no puede exceder los 2MB.',
            
            'case_date.required' => 'La fecha del caso es obligatoria.',
            'case_date.datetime' => 'La fecha del caso debe ser una fecha válida.'
        ];
    }
}
