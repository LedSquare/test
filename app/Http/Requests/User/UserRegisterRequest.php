<?php

namespace App\Http\Requests\User;
use Illuminate\Http\Request;
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
    public function rules(Request $request): array
    {
        $admin_check = $request->input('admin_check');
        return [
//
            'name' => ['required' , 'string', 'max:30', 'min:3'],
            'email' => ['required', 'string' ,'unique:users'],
            'password'=>['required', 'min:5'],
            'admin_check' => ['nullable', 'boolean'],
            'moder_check' => ['nullable', 'boolean'],
        ];
    }
}
