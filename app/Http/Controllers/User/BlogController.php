<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query();

        if ($request->has('category') && $request->category != '') {
            $query->whereHas('categories', function($q) use ($request) {
               $q->where('categories.id', $request->category);

            });
        }

        $blogs = $query->with('categories')->latest()->paginate(10);

        $categories = Category::all(); 

        return view('frontend.blogs.index', compact('blogs', 'categories'));
    }

    public function show(Blog $blog)
    {
        $blog->load('categories');
        return view('frontend.blogs.show', compact('blog'));
    }
}