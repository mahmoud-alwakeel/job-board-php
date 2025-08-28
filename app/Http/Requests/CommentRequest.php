<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'author' => 'required|string',
            'content' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'author.required' => 'Field is required',
            'content.required' => 'Field is required',
        ];
    }
}
