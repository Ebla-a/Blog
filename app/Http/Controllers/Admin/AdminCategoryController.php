<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCategoryStore;
use App\Http\Requests\RequestCategoryUpdate;
use App\Models\Category;

use App\Services\CategoryService;


class AdminCategoryController extends Controller
{
   
    protected $service;
    public function __construct(CategoryService $service){
        $this->service = $service;
    }
    public function index()
    {
        $categories = Category::latest()->paginate(6);
        return view("admin.categories.index",compact('categories'));
    }

    
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(RequestCategoryStore $request)
    {
        $this->service->store($request->validated());
         return redirect()->route('admin.categories.index')
                     ->with('success', 'Category created successfully');
    }

    
    public function show(Category $category )
    {
        return view('admin.categories.index',compact('category'));
        
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    
    public function update(RequestCategoryUpdate $request, Category $category)
    {
        $this->service->update($category ,$request->validated());   
         return redirect()->route('admin.categories.index')
                         ->with('success', 'Category updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(Category $category)
    {
        $this->service->delete($category);
        return redirect()->route('admin.categories.index')->with('success' ,'Category deleted successfully');
    }
 
}
