<?php

namespace App\Services;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class BlogService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function create(array $data , $imageFile)
    {
        $path = $imageFile->store('blogs','public');
        $blog = Blog::create(
            [
                'title' =>$data['title'],
                'content' =>$data['content'],
                'image' => $path,
                'slug' =>Str::slug($data['title'])
            ]);
            if(!empty($data['categories']))
            {
                $blog->categories()->attach($data['categories']);

            }
            return $blog;
    }
    public function update( Blog $blog ,array $data ,$imageFile=null)
    {
        if($imageFile){
            if($blog->image){
                Storage::disk('public')->delete($blog->image);
            }
            $path = $imageFile->store('blogs','public');
            $blog->image = $path;
        }
        $blog->title = $data['title'];
        $blog->content = $data['content'];
        $blog->slug = Str::slug($data['title']);
        $blog->save();
        
        if(!empty($data['categories'])){
            $blog->categories()->sync($data['categories']);
        }
        return $blog;

    }
    public function delete(Blog $blog){
        $blog->delete();
    }
    public function restore(Blog $blog){
        $blog->restore();
    }
    
    public function forceDelete(Blog $blog){
        if($blog->image){
            Storage::disk('public')->delete($blog->image);
        }
        $blog->forceDelete();
    }
}
