<?php

namespace App\Http\Requests\Market;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'title'           => 'required|max:120|min:2',
            'content'         => 'required|max:5000|min:5',
            'is_active'       => 'numeric|in:0,1',
            'tags'            => 'nullable',
        ];
    }
}
