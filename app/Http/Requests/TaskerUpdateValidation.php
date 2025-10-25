<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskerUpdateValidation extends FormRequest
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
            'result'           => ['required', 'string', 'max:255'],
            'namesoftaskers'   => ['required', 'string', 'max:255'],
            'kind'             => ['required', 'string', 'max:255'],
            'price'            => ['required', 'string', 'max:255'],
            'rate'             => ['nullable', 'numeric', 'between:0,9.9'],
            'resevation_time'  => ['required', 'date_format:H:i'],
            'location'         => ['required', 'string', 'max:255'],
            'Top pro'          => ['required', 'boolean'],
            'review_count'     => ['nullable', 'integer', 'min:0'],
        ];
    }
}
