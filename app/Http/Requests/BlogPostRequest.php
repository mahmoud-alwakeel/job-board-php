<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => "bail|required|unique:post,title,{$this->input('id')}",
            'author' => 'required',
            'content' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Field is required',
            'author.required' => 'Field is required',
            'content.required' => 'Field is required',
        ];
    }
}
