<?php

namespace App\Http\Requests;

use App\Models\Doctor;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'name' => ['required', 'min:3'],
            'bio' => ['required', 'min:3'],
            'specialty_id' => ['required'],
            'slug' => ['required','unique:specialties', 'min:3'],
        ];
    }
}
