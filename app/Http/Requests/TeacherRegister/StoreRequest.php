<?php

namespace App\Http\Requests\TeacherRegister;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'min:3', 'max:15'],
            'last_name' => ['required', 'min:3', 'max:15'],
            'email' => ['required', 'email', 'unique:teachers,email'],
            'phone' => ['required'],
            'password' => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->letters()
                    ->symbols()
                    ->uncompromised(),
                'confirmed'
            ],
            'password_confirmation' => ['required']
        ];
    }
}
