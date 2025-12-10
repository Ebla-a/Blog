@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2> Rececle bin</h2>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary"> Back</a>
</div>

<!-- @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif -->

<table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Title</th>
            <th>Categories</th>
            <th> Date of deleteing</th>
            <th>Control</th>
        </tr>
    </thead>

    <tbody>
        @forelse($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>
                    <img src="{{ asset('storage/' . $blog->image) }}" width="70" class="rounded">
                </td>
                <td>{{ $blog->title }}</td>

                <td>
                    @foreach($blog->categories as $category)
                        <span class="badge bg-info">{{ $category->name }}</span>
                    @endforeach
                </td>

                <td>{{ $blog->deleted_at->format('Y-m-d H:i') }}</td>

                <td>
                    <!-- Restore -->
                    <form action="{{ route('admin.blogs.restore', $blog->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-sm btn-success" onclick="return confirm('do you want recovery this blog?')">recovery</button>
                    </form>

                    <!-- Force Delete -->
                    <form action="{{ route('admin.blogs.force', $blog->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('do you want permanently delete?')"> Permanent Deletion</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-muted">No blogs were Deleted</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div>
    {{ $blogs->links() }}
</div>

@endsection