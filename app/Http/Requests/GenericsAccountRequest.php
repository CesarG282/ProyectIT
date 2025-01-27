<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenericsAccountRequest extends FormRequest
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
			'area' => 'required|string',
			'responsible' => 'required|string',
			'account' => 'required|string',
            'password' => 'required|string',
			'sn_computer' => 'required|string',
			'brand_computer' => 'required|string',
			'users_id' => 'required',
        ];
    }
}
