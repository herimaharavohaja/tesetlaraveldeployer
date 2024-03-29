<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'username' => 'nullable|string|max:150',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg',
            'first_name' => 'string|max:150',
            'last_name' => 'nullable|string|max:150',
            'email' => 'email|unique:users|max:150',
            'phone_number' => 'string|max:20',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:150',
            'password' => 'string|min:8|confirmed',

        ];

    }
}
