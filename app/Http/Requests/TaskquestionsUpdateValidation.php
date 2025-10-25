<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskquestionsUpdateValidation extends FormRequest
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
            'taskLocation'          => ['required', 'string', 'max:255'],
            'Neighborhood'          => ['nullable', 'string', 'max:255'],
            'how many'              => ['required', 'in:1,2,3,4or more'],
            'type of wall for tv'   => ['required', 'in:drywall,brick or stone,concrete,wood,Other/Im not sure'],
            'Tv mount or provider'  => ['required', 'in:Yes, I already have a Tv mount,No, i need  one provider,Im not sure'],
            'cable concealment'     => ['required', 'in:Inside the wall,External cover,No cable concealment'],
            'Any information'       => ['nullable', 'string', 'max:255'],
        ];
    }
}
