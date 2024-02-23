<?php

namespace App\Http\Requests\Feature;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
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
            "name" => "required|unique:features,name|string|min:3|max:20"
        ];
        if ($this->isMethod("PUT") || $this->isMethod("PATCH")){
            $rules["name"] = "nullable|unique:features,name|string|min:3|max:20";
        }
        return $rules;
    }
}
