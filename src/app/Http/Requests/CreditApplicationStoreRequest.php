<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreditApplicationStoreRequest extends FormRequest
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
            'dealer' => 'required|string',
            'contact_person' => 'required|string',
            'summ' => 'required|numeric|min:1',
            'credit_term' => 'required|numeric|min:1',
            'interest_rate' =>'required|numeric|between:1,99.99',
            'reason' => 'required|string',
            'status' => 'required|in:new,progress,approved,denied',
            'bank_id' => [
                'required',
                Rule::exists('banks', 'id')
            ]
        ];
    }

}
