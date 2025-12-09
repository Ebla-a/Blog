<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestBlogStore extends FormRequest
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
        return [
            "title" =>"required|string|max:255,unique:blogs,title",
            "content" =>"required|string",
            "image" =>"required|image|max:2048",
            "categories"=>'nullable|array',
            "categories.*"=> "exists:categories,id"
        ];
    }
    public function message(){
        return [
             'title.required'=>'the title is required',
             'title.string' =>'the title must be a string',
             'title.uinque' =>'the title is already exist',
             'content.required' =>'the content is already exist',
             'image.image' =>'',
             'image.max'=>'the size of image must be less than 2MB',
             
        ];



        ]
        
    }
}





















