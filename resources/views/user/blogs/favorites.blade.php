@extends('layouts.frontend')

@section('title','مفضلتي')

@section('content')

<h3 class="mb-3">favorit blogs ❤️</h3>

@if($favorites->isEmpty())
    <div class="alert alert-info">there is no favorite blog yet</div>
@endif

<div class="row">
@foreach($favorites as $blog)
    <div class="col-md-4 mb-4">
        <div class="card h-100">

            <img src="{{ asset('storage/'.$blog->image) }}" class="card-img-top">

            <div class="card-body">
                <h5>{{ $blog->title }}</h5>
                <a href="{{ route('frontend.blog.show',$blog) }}" class="btn btn-primary btn-sm">عرض</a>

                <form action="{{ route('favorites.toggle',$blog) }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-danger btn-sm">إزالة</button>
                </form>
            </div>

        </div>
    </div>
@endforeach
</div>

@endsection