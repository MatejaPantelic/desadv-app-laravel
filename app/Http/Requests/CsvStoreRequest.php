<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CsvStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'csv_file.*' => 'required|mimes:csv,txt|max:64'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'csv_file.*.mimes' => 'The File must have a .csv or .txt extension'
        ];
    }
}
