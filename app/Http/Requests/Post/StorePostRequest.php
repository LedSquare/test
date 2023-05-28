<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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

            'user_id' => ['numeric', 'max:50'],
            'title' => ['required' , 'string', 'max:50'],
            'text' => ['required' , 'string'],
            'is_active' => ['nullable, boolean'],
            'tag_name' => ['string', 'min:1', 'unique:tags'],
            'image'=>['nullable', 'image: png, jpeg, png'],
            'published_date'=>['string', 'date'],

        ];
    }
}
