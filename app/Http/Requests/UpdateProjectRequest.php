<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            "title" => ["required", "string", Rule::unique("projects")->ignore($this->route('project')) , "min:4", "max:255"],
            "link" => ["required", "url", "unique:projects", "min:4", "max:255"],
            "content" => ["required", "string", "min:10"],
        ];
    }

    /**
     * Get the errors messages for the defined validation rules
     *
     *  @return array<string, string>
     */

    public function messages(): array
    {
        return [
            "title.required" => "Please write a title!",
            "link.required" => "Please insert a valid link!",
        ];
    }
}
