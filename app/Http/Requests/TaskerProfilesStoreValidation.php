<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskerProfilesStoreValidation extends FormRequest
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
            'Top pro'                   => ['required', 'boolean'],
            'name'                      => ['required', 'string', 'max:255'],
            'mounting service'          => ['required', 'string', 'max:255'],
            'price'                     => ['required', 'string', 'max:255'],
            'rate'                      => ['nullable', 'numeric', 'between:0,9.9'],
            'hour'                      => ['required', 'string', 'max:50'],
            'Expirence and Specialities'=> ['required', 'string', 'max:500'],
            'Customer rating'           => ['nullable', 'numeric', 'between:0,9.9'],
            'rateNumber'                => ['nullable', 'numeric', 'between:0,9.9'],
        ];

    }
}
