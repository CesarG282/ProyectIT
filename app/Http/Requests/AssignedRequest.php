<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignedRequest extends FormRequest
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
			'idassigned' => 'required',
			'status' => 'required|string',
			'type' => 'required|string',
			'brand' => 'required|string',
			'serie' => 'required|string',
			'model' => 'required|string',
			'stiker' => 'required|string',
			'monitor' => 'required|string',
			'keyboard' => 'required|string',
			'mouse' => 'required|string',
			'adaptador' => 'required|string',
			'description' => 'required|string',
			'members_idmembers' => 'required',
        ];
    }
}
