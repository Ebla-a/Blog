@extends('frontend.layouts.app')

@section('title', 'myfavorite')

@section('content')
<h1 class="mb-4"> favoeites</h1>

<div class="row">
    @forelse($favorites as $blog)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
            @endif
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                    <a href="{{ route('frontend.blog.show', $blog->id) }}" class="btn btn-primary btn-sm"> Reade More</a>
                    <form method="POST" action="{{ route('favorites.toggle', $blog->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">  Remove from favorites</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
        <p class="text-muted">No favorites Blogs have been added yet</p>
    @endforelse
</div>

<div>
    {{ $favorites->links() }}
</div>
@endsection