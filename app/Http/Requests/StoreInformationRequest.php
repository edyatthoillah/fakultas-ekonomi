<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInformationRequest extends FormRequest
{
    /**
     * Error bag untuk modal store.
     */
    protected $errorBag = 'store';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'information_category_id' => [
                'required',
                'exists:information_categories,id'
            ],

            'title' => [
                'required',
                'string',
                'max:255'
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'information_category_id.required' => 'Kategori wajib dipilih.',
            'information_category_id.exists' => 'Kategori tidak valid.',

            'title.required' => 'Judul wajib diisi.',
            'title.max' => 'Judul maksimal 255 karakter.',

            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus JPG, JPEG, PNG, atau WEBP.',
            'image.max' => 'Ukuran gambar maksimal 2 MB.',
        ];
    }
}
