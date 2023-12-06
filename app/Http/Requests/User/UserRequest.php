<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'first_name' => 'required|string|min:3|max:255',
                'last_name' => 'required|string|min:3|max:255',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'email' => 'nullable|unique:users,email|email',
                'phone_number' => ['required', 'numeric', 'regex:/09(1[0-9]|9[1-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}/i', 'digits:11', 'unique:users,phone_number'],
                'image' => 'nullable|image|max:2048|min:1',
                'phone_verified_at' => 'nullable|in:0,1|numeric',
                'email_verified_at' => 'nullable|in:0,1|numeric',
                'is_staff' => 'nullable|in:0,1|numeric',
                'is_active' => 'nullable|in:0,1|numeric',
                'is_banned' => 'nullable|in:0,1|numeric',
            ];
        }

        return [
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'username' => ['required', Rule::unique('users' , 'username')->ignore($this->user->id),'string','max:64','min:4'],
            'email' => ['nullable', Rule::unique('users' , 'email')->ignore($this->user->id),'email'],
            'mobile' => ['required', 'numeric' , Rule::unique('users' , 'mobile')->ignore($this->user->id), 'regex:/09(1[0-9]|9[1-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}/i', 'digits:11'],
            'phone_verified_at' => 'nullable|in:0,1|numeric',
            'email_verified_at' => 'nullable|in:0,1|numeric',
            'is_staff' => 'nullable|in:0,1|numeric',
            'is_active' => 'nullable|in:0,1|numeric',
            'is_banned' => 'nullable|in:0,1|numeric',
        ];
    }
}