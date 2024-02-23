<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            "name" => "required|unique:permissions,name|string|min:3|max:20",
            "feature_id" => "required|integer|min:1|exists:features,id"
        ];
        if ($this->isMethod("PUT") || $this->isMethod("PATCH")){
            $rules["name"] = "nullable|unique:permissions,name|string|min:3|max:20";
            $rules["feature_id"] = "nullable|integer|min:1|exists:features,id";
        }
        return $rules;
    }
}
