<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\RequestBlogUpdate;
use App\Models\Blog;
use App\Models\Category;
use App\Services\BlogService;
use App\Http\Requests\RequestBlogStore;


class AdminBlogController extends Controller
{
    protected $service;
     /**
     * Display a listing of the resource.
     */
    public function __construct(BlogService $service){
        // $this->middleware(["auth" ,"admin"]);
        $this->service = $service;
    }
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('admin.blogs.index' ,compact('blogs'));
    }


    public function create()
    {
        $categories = Category::get();
        return view('admin.blogs.create' ,compact('categories'));
    }

    
    public function store(RequestBlogStore $request)
    {
        $this->service->create($request->validated(),$request->file('image'));
       return redirect()->route('admin.blogs.index')
                     ->with('success', 'Blog created successfully');
    }


  public function edit(Blog $blog, Category $category)
{
    $categories = Category::get();

    return view('admin.blogs.edit', compact('blog', 'categories'));
}

    public function update(RequestBlogUpdate $request, Blog $blog)
    {
        $this->service->update($blog,$request->validated(),$request->file('image')) ;
        return redirect()->route('admin.blogs.index')
                         ->with('success', 'Blog updated successfully');

    }

    /**
     * delted blog (soft delete)
     */
    public function destroy(Blog $blog)
    {
        $this->service->delete($blog);
        return redirect()->route('admin.blogs.index')->with('success' ,'Blog deleted successfully');
    }
    /**
     * * display the deleted blogs
     * @return \Illuminate\Contracts\View\View
     */
    public function trash(){
        $blogs = Blog::onlyTrashed()->paginate(10);
        return view('admin.blogs.trash', compact('blogs'));
    }
    /**
     * return deleted blogs
     * @param Blog $blog
     * @return \Illuminate\Http\RedirectResponse
     */
   public function restore($id)
{
    $blog = Blog::withTrashed()->findOrFail($id);
    $blog->restore();
    return redirect()->route('admin.blogs.trash')->with('success', 'Blog restored successfully');
}

     /**
      * final delete (force delete)
      * @param Blog $blog
      * @return \Illuminate\Http\RedirectResponse
      */
   public function forceDelete($id)
{
    $blog = Blog::withTrashed()->findOrFail($id);

    $this->service->forceDelete($blog);

    return redirect()->route('admin.blogs.trash')->with('success', 'Blog permanently deleted');
}

}

    