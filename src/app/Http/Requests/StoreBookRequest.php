<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title'         => ['required', 'string', 'max:255'],
            'author'        => ['required', 'string', 'max:255'],
            'description'   => ['nullable', 'string'],
            'isbn'          => ['nullable', 'string', 'max:20', 'unique:books,isbn'],
            'published_year'=> ['nullable', 'integer', 'min:1500', 'max:' . (date('Y') + 1)],
            'publisher'     => ['nullable', 'string', 'max:255'],
            'pages'         => ['nullable', 'integer', 'min:1'],
            'language'      => ['sometimes', 'in:uz,ru,en,other'],
            'category'      => ['nullable', 'string', 'max:100'],
            'cover_image'   => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp'],
        ];
    }

    public function messages(): array
    {
        return [
            'isbn.unique' => 'Bu ISBN allaqachon ro‘yxatdan o‘tgan.',
            'cover_image.max' => 'Rasm hajmi 2MB dan oshmasligi kerak.',
        ];
    }
}
