<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCategoryStore;
use App\Http\Requests\RequestCategoryUpdate;
use App\Models\Category;

use App\Services\CategoryService;


class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $service;
    public function __construct(CategoryService $service){
        $this->middleware(['auth' ,'admin']);
        $this->service = $service;

    }
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view("admin.categoreis.index",compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categoreis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestCategoryStore $request)
    {
        $this->service->store($request->validated());
         return redirect()->route('admin.categoreis.index')
                     ->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category )
    {
        return view('admin.categoreis.index',compact('category'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categoreis.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestCategoryUpdate $request, Category $category)
    {
        $this->service->update($category ,$request->validated());   
         return redirect()->route('admin.categoreis.index')
                         ->with('success', 'Category updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->service->delete($category);
        return redirect()->route('admin.categoreis.index')->with('success' ,'Category deleted successfully');;
        
    }
    public function trash(Category $category)
    {
        $categories = Category::onlyTrashed()->paginate(10);
        return view('admin.categoreis.index',compact('categories'));
    }
    public function restore(Category $category){
        $this->service->restore($category);
        return redirect()->route('admin.categoreis.index')
        ->with('success', 'Category restored successfully');;
    }
    public function forceDelete(Category $category){
        $this->service->forceDelete($category);
        return redirect()->route('admin.categoreis.index')->with('success','Category permanently deleted');
    }
}
