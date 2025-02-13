<?php

namespace App\Http\Requests\Auth\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

class LoginRegisterRequest extends FormRequest
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
    public function rules()
    {
        $route = Route::current();
        if ($route->getName() == 'auth.customer.login-register'){
            return [
                'id' => 'required|min:11|max:64|regex:/^[a-zA-z0-9_.@\+]*$/',
            ];
        }
        elseif ($route->getName() == 'auth.customer.login-confirm') {
            return [
                'otp_one' => 'required|min:1|max:1',
                'otp_two' => 'required|min:1|max:1',

            ];
        }

    }

    public function attributes()
    {
        return [
            'id' => "ایمیل یا شماره موبایل"
        ];
    }
}
