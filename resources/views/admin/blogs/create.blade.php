@extends('admin.layouts.app')

@section('title', '')

@section('content')

<style>
    :root {
        --silver-light: #f1f2f6;
        --silver: #dfe4ea;
        --silver-dark: #ced6e0;
        --gray-dark: #2f3542;
        --gray-text: #57606f;
    }

    .page-box {
        background: var(--silver-light);
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        border: 1px solid var(--silver-dark);
    }

    .page-title {
        font-weight: 700;
        color: var(--gray-dark);
        border-right: 5px solid var(--silver-dark);
        padding-right: 12px;
    }

    .form-label {
        font-weight: 600;
        color: var(--gray-dark);
    }

    .form-control, .form-check-input {
        border-radius: 8px;
        border: 1px solid var(--silver-dark);
    }

    .btn-success {
        background: var(--gray-dark);
        border: none;
    }

    .btn-success:hover {
        background: #1e272e;
    }

    .category-box {
        background: var(--silver);
        padding: 10px;
        border-radius: 8px;
        border: 1px solid var(--silver-dark);
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title">add new blog</h2>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="page-box">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label"> Title</label>
            <input type="text" name="title" id="title"
                   class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="6" required>{{ old('content') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Categories</label>
            <div class="category-box">
                @foreach($categories as $category)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"
                               name="categories[]" id="cat{{ $category->id }}"
                               value="{{ $category->id }}"
                               {{ (is_array(old('categories')) && in_array($category->id, old('categories'))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="cat{{ $category->id }}">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-success px-4">Save </button>
    </form>

</div>

@endsection
