<?php

namespace App\Http\Requests\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
//            unique:users
            'name' => ['required' , 'string', 'max:30', 'min:3'],
            'email' => ['required', 'string' ,'unique:users'],
            'password'=>['required', 'min:5'],
            'admin_check' => ['nullable', 'boolean'],
            'moder_check'=> ['nullable', 'boolean'],
        ];
    }
}
