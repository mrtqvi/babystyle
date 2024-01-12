<?php

namespace App\Http\Requests\Market;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'shipping_method_id' => 'required|exists:shipping_methods,id',
            'address_id' => 'required|exists:addresses,id',
            'discount_code' => 'nullable|string|max:255'
        ];
    }

    public function messages(): array 
    {
        return [
            'address_id' => 'لطفا یک آدرس را انتخاب نمایید',
            'shipping_method_id' => 'لطفا یک از روش های ارسال را انتخاب نمایید'
        ];
    }
}
