<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestBlogUpdate extends FormRequest
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
        $blogId = $this->route('blog')->id;
        return [
            "title" =>"required|string|max:255".$blogId,
            "content" =>"required|string",
            "image" =>"nullable|image",
            "categories"=>'array',
            "categories.*"=> "exists:categories,id"
        ];

    }
    public  function message(){
        return [
             'title.required'=>'the title is required',
             'title.string' =>'the title must be a string',
             'title.uinque' =>'the title is already exist',
             'content.required' =>'the content is already exist',
             'image.image' =>'the image must be in the correct format',
             'image.max'=>'the size of image must be less than 2MB',

        ]; 
    }
}
