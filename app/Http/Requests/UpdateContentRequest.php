<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContentRequest extends FormRequest
{
    /**
     * Authorization
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];
    }

    /**
     * Custom messages (opsional)
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Judul wajib diisi',
            'title.string' => 'Judul harus berupa teks',
            'title.max' => 'Judul maksimal 255 karakter',

            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'Format gambar harus jpg, jpeg, png, atau webp',
            'image.max' => 'Ukuran gambar maksimal 2MB',
        ];
    }
}
