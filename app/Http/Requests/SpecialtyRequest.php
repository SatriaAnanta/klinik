<?php

namespace App\Http\Requests;

use App\Models\Specialty;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SpecialtyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
            'slug' => ['required','unique:specialties', 'min:3'],
        ];
    }
}
