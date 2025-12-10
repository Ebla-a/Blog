<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // $query = Blog::qyery();
    public function index(){

        $blogs = Blog::with('categories')->latest()->paginate(10);
        $categoroies = Category::all();
        return view("frontend.home",compact('blogs','categoroies'));
    }
    public function show(Blog $blog){
        $blog->load('categories');// eager loading
        return view("user.blogs.show",compact('blog'));
    }
    public function filterByCatgory(Category $category){
        $blogs = $category->blogs()->latest()->paginate(10);
        
        return view("user.blogs.index",compact([
            'blogs' =>$blogs,
            'categories' =>Category::all(),
            'selectedCategory' =>$category
        ]));

    }
}





























