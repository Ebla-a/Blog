@extends('frontend.layouts.app')

@section('title', $blog->title)

@section('content')
<div class="mb-4">
    <a href="{{ route('frontend.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card mb-4">
    @if($blog->image)
    <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
    @endif
    <div class="card-body">
        <h2 class="card-title">{{ $blog->title }}</h2>
        <div class="mb-3">
            @foreach($blog->categories as $category)
                <span class="badge bg-info">{{ $category->name }}</span>
            @endforeach
        </div>
        <p class="card-text">{{ $blog->content }}</p>

        @auth
            <form method="POST" action="{{ route('favorites.toggle', $blog->id) }}">
                @csrf
                <button type="submit" class="btn {{ auth()->user()->favorites->contains($blog->id) ? 'btn-danger' : 'btn-outline-danger' }}">
                    {{ auth()->user()->favorites->contains($blog->id) ? 'Remove from favorites' : ' add to favorites' }}
                </button>
            </form>
        @endauth
    </div>
</div>
@endsection