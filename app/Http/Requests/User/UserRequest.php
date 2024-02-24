<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [
            'name' => 'required|min:3|string|unique:users',
            'username' => 'required|min:3|string|unique:users',
            'email' => 'required|email|string|min:3',
            'role_id' => 'required|exists:roles,id|integer',
            'phone' => 'required|min:3',
            'address' => 'required|string|min:3',
            'password' => 'required|string|min:3',
            'gender' => 'required|in:Male,Female',
            'is_active' => 'required|boolean'
        ];

        if ($this->isMethod('PUT') || $this->isMethod('PATCH')){
            $rules['name'] = 'nullable|min:3|string';
            $rules['username'] = 'required|min:3|string';
            $rules['email'] = 'required|email|string|min:3';
            $rules['role_id'] = 'required|exists:roles,id|integer';
            $rules['phone'] = 'required|min:3';
            $rules['address'] = 'required|string|min:3';
            $rules['password'] = 'required|string|min:3';
            $rules['gender'] = 'required|in:Male,Female';
            $rules['is_active'] = 'required|boolean';
        }

        return $rules;
    }
}
