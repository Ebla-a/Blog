@extends('admin.layouts.app')

@section('title')

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
        border: 1px solid var(--silver-dark);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
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

    .form-control {
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
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title"> Edit</h2>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
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

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label"> Name</label>
            <input type="text" name="name" id="name"
                   class="form-control"
                   value="{{ old('name', $category->name) }}" required>
        </div>

        <button type="submit" class="btn btn-success px-4"> Save</button>
    </form>

</div>

@endsection
