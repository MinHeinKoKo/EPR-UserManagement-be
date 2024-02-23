<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => "required|min:3|max:15|string|unique:roles",
            'permissions' => 'required',
            'permissions.*' => "required|integer|exists:permissions,id"
        ];

        if ($this->isMethod('PUT') || $this->isMethod("PATCH")){
            $rules['name'] = 'nullable|min:3|max:15|string';
            $rules['permissions'] = 'nullable';
            $rules['permissions.*'] = 'nullable|integer|exists:permissions,id';
        }

        return $rules;
    }
}