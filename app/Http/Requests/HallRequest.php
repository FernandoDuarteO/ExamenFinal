<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HallRequest extends FormRequest
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
            'room_name' => 'required|string|min:4|max:255',
            'location_room' => 'required|string|min:4|max:255',
            'code_room' => ['required','string','min:4','max:45',Rule::unique('halls')->ignore($this->hall)],
            'judge_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'room_name.required' => 'El nombre de la sala es requerido.',
            'room_name.string' => 'El nombre de la sala debe ser una cadena de texto.',
            'room_name.min' => 'El nombre de la sala debe contener un mínimo de 4 caracteres.',
            'room_name.max' => 'El nombre de la sala debe contener un máximo de 255 caracteres.',

            'location_room.required' => 'La ubicación de la sala es requerida.',
            'location_room.string' => 'La ubicación de la sala debe ser una cadena de texto.',
            'location_room.min' => 'La ubicación de la sala debe contener un mínimo de 4 caracteres.',
            'location_room.max' => 'La ubicación de la sala debe contener un máximo de 255 caracteres.',

            'code_room.required' => 'El código de la sala es requerido.',
            'code_room.string' => 'El código de la sala debe ser una cadena de texto.',
            'code_room.unique' => 'El código de la sala debe ser único.',
            'code_room.min' => 'El código de la sala debe contener un mínimo de 4 caracteres.',
            'code_room.max' => 'El código de la sala debe contener un máximo de 45 caracteres.',

            'judge_id.required' => 'El nombre del juez es requerido.'
        ];
    }
}
