<?php

namespace App\Http\Requests;

use App\Rules\WordsCount;
use Illuminate\Foundation\Http\FormRequest;

class AddCourseRequest extends FormRequest
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
            'title' => ['required', 'min:2', 'max:20'],
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
            'content' => ['nullable', new WordsCount(13)],
            'duration' => 'required|numeric',
            'price' => 'required|numeric',
            'instructor' => ''
        ];
    }

    public function messages()
    {
        return [
            'required' => 'اخوي الحقول مطلوبة الله يرضى عليييييك'
        ];
    }
}
