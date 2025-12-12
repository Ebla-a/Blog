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

    .btn-success {
        background: var(--gray-dark);
        border: none;
    }

    .btn-success:hover {
        background: #1e272e;
    }

    .btn-danger {
        background: #c0392b;
        border: none;
    }

    .btn-danger:hover {
        background: #96281b;
    }

    .badge {
        padding: 6px 10px;
        font-size: 0.85rem;
        border-radius: 6px;
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title">Recycle Bin</h2>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">

        <table class="table table-hover table-bordered mb-0 align-middle">
            <thead>
                <tr>
                    <th width="60">ID</th>
                    <th width="120">Image</th>
                    <th>Title</th>
                    <th>Categories</th>
                    <th width="180"> DAte of deleting</th>
                    <th width="200">Control</th>
                </tr>
            </thead>

            <tbody>
                @forelse($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>

                        <td>
                            <img src="{{ asset('storage/' . $blog->image) }}"
                                 width="70" class="rounded shadow-sm"
                                 style="object-fit: cover;">
                        </td>

                        <td>{{ $blog->title }}</td>

                        <td>
                            @foreach($blog->categories as $category)
                                <span class="badge bg-info text-dark">{{ $category->name }}</span>
                            @endforeach
                        </td>

                        <td>{{ $blog->deleted_at->format('Y-m-d H:i') }}</td>

                        <td>
                            <!-- Restore -->
                            <form action="{{ route('admin.blogs.restore', $blog->id) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-sm btn-success"
                                        onclick="return confirm('do you want to recovery this blog')">
                                    <i class="bi bi-arrow-counterclockwise"></i> Recovery
                                </button>
                            </form>

                            <!-- Force Delete -->
                            <form action="{{ route('admin.blogs.force', $blog->id) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('do you want to delete it permanently')">
                                    <i class="bi bi-x-circle"></i> Permanent deletion 
                                </button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            there are no deleted blogs yet
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
