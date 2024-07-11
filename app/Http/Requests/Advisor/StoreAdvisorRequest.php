<?php

namespace App\Http\Requests\Advisor;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvisorRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'count_of_courses' => 'required|integer',
            'rating' => 'required|numeric|min:0|max:5',
            'students_taught' => 'required|integer',
            'overview' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'experience' => 'nullable|string',
            'contact_number' => 'required|string|max:15',
            'email' => 'required|email|unique:advisors,email',
            'linkedin_url' => 'nullable|url',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'image' => 'nullable|string',
        ];
    }
}
