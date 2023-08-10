<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleSignup extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                 'name' => 'required',
                 'email' => 'required|email',
                 'password' => 'required|min:8',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Phải nhập họ tên',
            'email.required' => 'Phải nhập email',
            'password.required' => 'Phải nhập mật',
            'password.min' => 'Phải nhập mật khải nhiều hơn 8 ký tự',
        ];
    }
}
