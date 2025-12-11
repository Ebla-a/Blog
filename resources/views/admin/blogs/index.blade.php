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

    .page-title {
        font-weight: 700;
        color: var(--gray-dark);
        border-right: 5px solid var(--silver-dark);
        padding-right: 12px;
    }

    .card {
        border-radius: 12px;
        border: 1px solid var(--silver-dark);
        background: var(--silver-light);
    }

    .table thead {
        background: var(--silver);
        color: var(--gray-dark);
        font-weight: 600;
    }

    .table-hover tbody tr:hover {
        background: var(--silver-dark);
        transition: 0.25s ease;
    }

    .btn-primary {
        background: var(--gray-dark);
        border: none;
    }

    .btn-primary:hover {
        background: #1e272e;
    }

    .btn-danger {
        background: #c0392b;
        border: none;
    }

    .btn-danger:hover {
        background: #96281b;
    }

    .btn-success {
        background: var(--silver-dark);
        color: var(--gray-dark);
        border: none;
        font-weight: 600;
    }

    .btn-success:hover {
        background: var(--gray-dark);
        color: #fff;
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title m-0"> List Of Blogs</h2>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i>   Add New Blog
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif 

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover table-bordered mb-0 align-middle">
            <thead>
                <tr>
                    <th width="60">ID</th>
                    <th width="200">Title</th>
                    <th>Content</th>
                    <th width="120">Image</th>
                    <th width="160">Control</th>
                </tr>
            </thead>

            <tbody>
                @forelse($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ Str::limit($blog->content, 80) }}</td>

                        <td>
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" 
                                     alt="image" 
                                     class="img-thumbnail rounded"
                                     style="width: 70px; height: 70px; object-fit: cover;">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" 
                               class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" 
                                  method="POST" 
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('are you sure')">
                                    <i class="bi bi-trash"></i> delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            there are no blogs yet
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-3">
    {{ $blogs->links() }}
</div>

@endsection
