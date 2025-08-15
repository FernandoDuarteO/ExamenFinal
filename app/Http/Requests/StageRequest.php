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
            'file' => 'sometimes|nullable|mimes:pdf,doc,docx,xls,xlsx'
            
            
        ];
    }
    public function messages(){
        return[
            'document_type.required' => 'El tipo de documento es obligatorio.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'description.min' => 'La descripción debe tener al menos 10 caracteres.',
            'description.max' => 'La descripción no puede exceder los 255 caracteres.',

            
            
            'file.sometimes'=> 'El archivo es opcional.',
            'file.nullable' => 'El archivo es opcional.',
            'file.mimes'    => 'El archivo debe ser un PDF, DOC, DOCX, XLS o XLSX.'
            
        ];
    }
}
