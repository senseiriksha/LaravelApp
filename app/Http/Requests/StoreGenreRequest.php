<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGenreRequest extends FormRequest
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
        // return [
        //     'naziv' => ['required', 'max:25'],
        // ];

        return [
            'name' => ['required', 'max:15', 'min:5'],
            // 'prezime' => ['required', 'max:15', 'min:5'],
            // 'adresa' => ['max:20']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Naziv polje je obavezno.',
            'name.max' => 'Naziv polje mora sadržavati 15 znakova.',
        ];
    }
}
