<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\RequestBlogUpdate;
use App\Models\Blog;
use App\Services\BlogService;



use App\Http\Requests\RequestBlogStore;

class AdminBlogController extends Controller
{
    protected $service;
     /**
     * Display a listing of the resource.
     */
    public function __construct(BlogService $service){
        $this->middleware(['auth' , 'admin']);
        $this->service = $service;
    }
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index' ,compact('blogs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestBlogStore $request)
    {
        $this->service->create($request->validated(),$request->file('image'));
       return redirect()->route('admin.blogs.index')
                     ->with('success', 'Blog created successfully');
    }


    public function edit(Blog $blog)
    {

        return view('admin.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestBlogUpdate $request, Blog $blog)
    {
        $this->service->update($blog,$request->validated(),$request->file('image')) ;
        return redirect()->route('admin.blogs.index')
                         ->with('success', 'Blog updated successfully');

    }

    /**
     * Remove the specified resource from storage.
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
    public function restore(Blog $blog){
       $this->service->restore($blog);
         return redirect()->route('admin.blog.trash')
                         ->with('success', 'Blog restored successfully');

    } 
     /**
      * final delete (force delete)
      * @param Blog $blog
      * @return \Illuminate\Http\RedirectResponse
      */
     public function forceDelete(Blog $blog)
    {
        $this->service->forceDelete($blog);

        return redirect()->route('admin.blogs.trash')
                         ->with('success', 'Blog permanently deleted');
    }
}

    