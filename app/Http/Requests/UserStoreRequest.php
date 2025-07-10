<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'iban' => str_replace('ir', '', $this->input('iban'))
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'username' => 'required|string|min:5|max:32|unique:App\Models\User,username',
            'password' => 'required|string|min:2|max:32',
            'last_name' => 'required|string|min:2|max:32',
            'first_name' => 'required|string|min:2|max:32',
            'email' => 'required|email|min:2|max:32|unique:App\Models\User,email',
            'phone' => 'required|digits:11|starts_with:09|unique:App\Models\User,phone',
            'iban' => 'required|digits:24'

        ];
    }

    protected function passedValidation()
    {
        $iban = $this->input('iban');
        $this->merge(['iban' => 'ir' . $iban]);
    }
}
