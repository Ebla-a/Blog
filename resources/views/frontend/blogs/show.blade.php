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

      
        <h4 class="mt-4">Comments</h4>
        @if($blog->comments && $blog->comments->count() > 0)
            @foreach($blog->comments as $comment)
                <div class="mb-3 p-3 border rounded d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $comment->user->name ?? 'Unknown User' }}</strong>
                        <p class="mb-0">{{ $comment->content }}</p>
                    </div>

                  
                    @if(auth()->check() && (auth()->user()->role === 'admin' || auth()->id() === $comment->user_id))
                        <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                        </form>
                    @endif
                </div>
            @endforeach
        @else
            <p>No comments yet. Be the first to comment!</p>
        @endif

        
        @auth
            <form method="POST" action="{{ route('favorites.toggle', $blog->id) }}" class="mt-3">
                @csrf
                <button type="submit" class="btn {{ auth()->user()->favorites->contains($blog->id) ? 'btn-danger' : 'btn-outline-danger' }}">
                    {{ auth()->user()->favorites->contains($blog->id) ? 'Remove from favorites' : 'Add to favorites' }}
                </button>
            </form>

            
            <form method="POST" action="{{ route('comments.store', $blog->id) }}" class="mt-3">
                @csrf
                <div class="mb-3">
                    <textarea name="content" class="form-control" placeholder="Add your comment..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Comment</button>
            </form>
        @endauth
    </div>
</div>
@endsection
