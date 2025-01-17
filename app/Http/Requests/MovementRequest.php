<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovementRequest extends FormRequest
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
			'idmovements' => 'required',
			'movement_type' => 'required|string',
			'sent' => 'required|string',
			'address' => 'required|string',
			'date' => 'required',
			'shipping_medium' => 'required|string',
			'responsible' => 'required|string',
			'description' => 'required|string',
			'users_id' => 'required',
        ];
    }
}
