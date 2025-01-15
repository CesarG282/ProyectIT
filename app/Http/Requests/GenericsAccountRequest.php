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
			'idgenerics_accountscol' => 'required',
			'sent' => 'required|string',
			'responsible' => 'required|string',
			'account' => 'required|string',
			'sn_computer' => 'required|string',
			'brand_computer' => 'required|string',
			'create' => 'string',
			'update' => 'string',
			'user_username' => 'required|string',
			'users_id' => 'required',
        ];
    }
}
