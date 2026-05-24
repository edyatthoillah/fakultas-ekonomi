<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
{
    /**
     * Authorization
     */
    public function authorize(): bool
    {
        // WAJIB true supaya bisa dipakai
        return true;
    }

    /**
     * Validation rules
     */
    public function rules(): array
    {
        return [
            'content_category_id' => ['required', 'exists:content_categories,id'],
            'title'               => ['required', 'string', 'max:255'],
            'image'               => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'description'         => ['nullable', 'string'],
        ];
    }

    /**
     * Custom message (optional)
     */
    public function messages(): array
    {
        return [
            'content_category_id.required' => 'Kategori wajib dipilih.',
            'title.required' => 'Judul wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
        ];
    }
}
