@extends('frontend.layout')

@section('title', 'All Blogs')

@section('content')

<h2 class="mb-4">Latest Blogs</h2>

<div class="row">

    @foreach ($blogs as $blog)
        <div class="col-md-4 mb-4">

            <div class="card h-100">

           
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">

                @else
                    <img src="https://placehold.co/600x400?text=No+Image" 
                         class="card-img-top">
                @endif

                <div class="card-body">

                    <h5 class="card-title">{{ $blog->title }}</h5>

                    <p class="card-text text-muted">
                        {{ Str::limit(strip_tags($blog->content), 100) }}
                    </p>
                   
   
                    <p>
                        @foreach ($blog->categories as $category)
                            <span class="badge bg-primary">
                                {{ $category->name }}
                            </span>
                        @endforeach
                    </p>
                    <a href="{{ route('frontend.blog.show', $blog->slug) }}" class="btn btn-dark">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    @endforeach

</div>

{{-- Pagination --}}
<div class="mt-4">
    {{ $blogs->links() }}
</div>

@endsection