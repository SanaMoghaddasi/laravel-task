<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
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
            'username' => 'required|alpha_dash:|min:4|max:32|unique:App\Models\User,username',
            'password' => 'required|min:2|max:32|confirmed',
            'last_name' => 'required|string|min:2|max:32',
            'first_name' => 'required|string|min:2|max:32',
        ];
    }
}
