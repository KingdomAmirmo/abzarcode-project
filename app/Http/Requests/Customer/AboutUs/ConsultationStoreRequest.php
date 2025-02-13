<?php

namespace App\Http\Requests\Customer\AboutUs;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationStoreRequest extends FormRequest
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
            'name' => 'required|string|regex:/^[ا-یa-zA-Zء-ي ]+$/u|max:50',
            'mobile' => 'required|string|regex:/^[0-9]+$/u|max:11|min:11',
        ];
    }
}
