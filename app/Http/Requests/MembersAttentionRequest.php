<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembersAttentionRequest extends FormRequest
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
			'description' => 'required|string',
            'date' => 'required|date_format:d-m-Y', // Asegura que el formato de fecha sea 'DD-MM-YYYY'
			'members_id' => 'required',
        ];
    }
}
