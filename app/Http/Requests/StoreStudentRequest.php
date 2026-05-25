<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Authorization
     */
    public function authorize(): bool
    {
        return true; // WAJIB true biar bisa dipakai
    }

    /**
     * Validation rules
     */
    public function rules(): array
    {
        return [
            'student_category_id' => ['required', 'exists:student_categories,id'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'institution' => ['nullable', 'string', 'max:255'],
            'date' => ['nullable', 'date'],
        ];
    }

    /**
     * Custom messages (optional)
     */
    public function messages(): array
    {
        return [
            'student_category_id.required' => 'Kategori wajib dipilih.',
            'name.required' => 'Nama wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
        ];
    }
}
