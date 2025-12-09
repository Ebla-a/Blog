<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategoryUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->role ==='admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $catgoryId = $this->route('category')->id();
        return [
             'name'=>'required|sttring|max:255|uinque:categories,name'.$catgoryId,
        ];
    }
      public function messages(){
        return [
             'name.required' =>'the name is requires',
             'name.string' =>'the name must be a string',
             'name.uinque' =>'the name is already exist',
        ];
    }
}
