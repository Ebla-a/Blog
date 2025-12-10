@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Recycle Bin</h2>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary"> Back</a>
</div>

<!-- @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif -->

<table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th> Name</th>
            <th>Slug</th>
            <th>control</th>
        </tr>
    </thead>

    <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    <!-- Restore -->
                    <form action="{{ route('admin.categories.restore', $category->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-sm btn-success">recovery</button>
                    </form>

                    <!-- Force Delete -->
                    <form action="{{ route('admin.categories.force', $category->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"> Permanet deletion</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-muted">No categories have been deleted</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div>
    {{ $categories->links() }}
</div>
@endsection