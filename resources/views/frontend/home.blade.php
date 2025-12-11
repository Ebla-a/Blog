@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')

<style>
    :root {
        --silver-light: #f1f2f6;
        --silver: #dfe4ea;
        --silver-dark: #ced6e0;
        --gray-dark: #2f3542;
        --gray-text: #57606f;
    }

    .page-title {
        font-weight: 700;
        color: var(--gray-dark);
        border-right: 5px solid var(--silver-dark);
        padding-right: 12px;
        margin-bottom: 25px;
    }

    .filter-box {
        background: var(--silver-light);
        padding: 12px;
        border-radius: 10px;
        border: 1px solid var(--silver-dark);
        display: inline-block;
    }

    .card {
        border-radius: 12px;
        border: 1px solid var(--silver-dark);
        background: #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        transition: 0.25s ease;
    }

    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
        border-radius: 12px 12px 0 0;
    }

    .btn-primary {
        background: var(--gray-dark);
        border: none;
    }

    .btn-primary:hover {
        background: #1e272e;
    }

    .btn-outline-danger:hover {
        background: #c0392b;
        color: #fff;
    }
</style>

<h1 class="page-title">All Blogs</h1>

<div class="mb-3">
    <form method="GET" action="{{ route('frontend.index') }}">
        <div class="filter-box">
            <select name="category" class="form-select d-inline w-auto" onchange="this.form.submit()">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>
</div>

<div class="row">
    @forelse($blogs as $blog)
        <div class="col-md-4 mb-4">
            <div class="card h-100">

                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" 
                         class="card-img-top" alt="{{ $blog->title }}">
                @endif

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $blog->title }}</h5>

                    <p class="card-text text-muted">
                        {{ Str::limit(strip_tags($blog->content), 100) }}
                    </p>

                    <div class="mt-auto d-flex justify-content-between align-items-center">
                        <a href="{{ route('frontend.blog.show', $blog->slug) }}" 
                           class="btn btn-primary btn-sm">
                            Read More
                        </a>

                        @auth
                            <form method="POST" action="{{ route('favorites.toggle', $blog->id) }}">
                                @csrf
                                <button type="submit" 
                                    class="btn btn-sm 
                                    {{ auth()->user()->favorites->contains($blog->id) 
                                        ? 'btn-danger' 
                                        : 'btn-outline-danger' }}">
                                    {{ auth()->user()->favorites->contains($blog->id) 
                                        ? 'Remove' 
                                        : 'Favorite' }}
                                </button>
                            </form>
                        @endauth
                    </div>
                </div>

            </div>
        </div>
    @empty
        <p class="text-muted">There are no blogs</p>
    @endforelse
</div>

<div class="mt-4">
    {{ $blogs->links() }}
</div>

@endsection
