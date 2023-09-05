<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
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
            'npm' => 'required',
            'nama' => 'required|max:255',
            'jk' => 'required',
            'prodi_id' => 'required',
            'angkatan' => 'required',
            'kelas' => 'required',
        ];
    }
}
