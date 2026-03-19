<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAllianceMemberRequest extends FormRequest
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
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:100',
            'role' => 'required|string|max:100',
            'message' => 'nullable|string',
            'source_page' => 'nullable|string|max:100',
            'source_section' => 'nullable|string|max:100',
            'source_button' => 'nullable|string|max:150',
            'source_program_slug' => 'nullable|string|max:150',
            'source_program_title' => 'nullable|string|max:255',
            'source_url' => 'nullable|url|max:2048',
            'referrer_url' => 'nullable|url|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Please enter your full name.',
            'phone.required' => 'Please enter your phone number.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'country.required' => 'Please enter your country.',
            'role.required' => 'Please select your role.',
            'source_url.url' => 'The source page URL is not valid.',
            'referrer_url.url' => 'The referrer URL is not valid.',
        ];
    }
}
