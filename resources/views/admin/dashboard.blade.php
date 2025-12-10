@extends('admin.layouts.app')

@section('title', 'admin panel ')

@section('content')

<div class="row">

    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h4>number of blogs</h4>
                <h2>{{ $blogsCount }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h4>number of categories</h4>
                <h2>{{ $categoriesCount }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h4>number of users </h4>
                <h2>{{ $usersCount }}</h2>
            </div>
        </div>
    </div>

</div>

@endsection