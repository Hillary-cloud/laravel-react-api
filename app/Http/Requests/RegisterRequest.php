<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:5|max:150',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|min:6',
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'Name field is required',
            'name.min' => '',
            'email.required' => 'Email field is required',
            'email.email' => 'Email must be a valid email address',
            'phone_number.required' => 'Phone number field is required',
            'password.required' => 'Password field is required'
        ];
    }
}
