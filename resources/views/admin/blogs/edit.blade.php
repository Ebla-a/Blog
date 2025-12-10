@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2> Edit Category</h2>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back </a>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label"> Title</label>
        <input type="text" name="title" id="title" 
               class="form-control" value="{{ old('title', $blog->title) }}" required>
    </div>


    <div class="mb-3">
        <label for="content" class="form-label">content </label>
        <textarea name="content" id="content" class="form-control" rows="6" required>{{ old('content', $blog->content) }}</textarea>
    </div>

   
    <div class="mb-3">
        <label class="form-label">Image </label><br>
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" width="150" class="rounded mb-2">
        @endif
    </div>

   
   

    
    <div class="mb-3">
        <label class="form-label">Categories</label>
        <div>
            @foreach($categories as $category)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" 
                           name="categories[]" id="cat{{ $category->id }}" 
                           value="{{ $category->id }}"
                           {{ (is_array(old('categories', $blog->categories->pluck('id')->toArray())) 
                                && in_array($category->id, old('categories', $blog->categories->pluck('id')->toArray())))
                                ? 'checked' : '' }}>
                    <label class="form-check-label" for="cat{{ $category->id }}">{{ $category->name }}</label>
                </div>
            @endforeach
        </div>
    </div>

    <button type="submit" class="btn btn-success"> Save</button>
</form>

@endsection