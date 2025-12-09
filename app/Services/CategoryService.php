<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class CategoryService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    
    public function store(array $data)
    {

          return Category::create(
            [
                'name'=>$data['name'],
                'slug' =>Str::slug($data['name']),
            ]);
    
    }
    public function update(Category $category , array $data){
        $category->update([
            'name' =>$data['name'],
            'slug'=>Str::slug($data['name'])
        ]);
        return $category;
    }
    public function delete(Category $category){
        $category->delete();
    }
    public function restore(Category $category){
        $category->restore();
    }
    
    public function forceDelete(Category $category){
        $category->forceDelete();
    }
}
