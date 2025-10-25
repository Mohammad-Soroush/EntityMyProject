<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileStoreValidation extends FormRequest
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
            'Username'=>['required','min:3','max:4'],
            'email'=>['required','email'],
            'phonenumber' => ['required','string','min:5','max:12'],
            'EditAdress' => ['required', 'string', 'min:5', 'max:255'],
            'setAsPrimeryAdd'=> ['nullable','boolean']
            ];
    }
}
