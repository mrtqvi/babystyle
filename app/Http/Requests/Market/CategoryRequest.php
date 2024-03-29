<?php

namespace App\Http\Requests\Market;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'title' =>  $this->isMethod('post') ? 'required|max:120|unique:categories,title' : 'required|max:120|unique:categories,title,' . ($this->category->id ? $this->category->id : 'NULL') . ',id',
            'is_active' => 'in:0,1',
            'variations' => 'nullable|array',
            'variations.*' => 'required|max:255',
        ];

    }
}
