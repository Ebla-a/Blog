@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
<h1 class="mb-4"> All Blogs</h1>

<div class="mb-3">
    <form method="GET" action="{{ route('frontend.index') }}">
        <select name="category" class="form-select w-auto d-inline" onchange="this.form.submit()">
            <option value=""> all categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>
</div>

<div class="row">
    @forelse($blogs as $blog)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
            @endif
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                    <a href="{{ route('frontend.blog.show', $blog->id) }}" class="btn btn-primary btn-sm"> Read More</a>

                    @auth
                        <form method="POST" action="{{ route('favorites.toggle', $blog->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-sm {{ auth()->user()->favorites->contains($blog->id) ? 'btn-danger' : 'btn-outline-danger' }}">
                                {{ auth()->user()->favorites->contains($blog->id) ? '  Remove from favorites' : ' add to favorites' }}
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    @empty
        <p class="text-muted">there are no blogs</p>
    @endforelse
</div>

<div>
    {{ $blogs->links() }}
</div>
@endsection