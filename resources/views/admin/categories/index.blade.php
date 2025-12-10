@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2> list of categories</h2>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-success">  add new category</a>
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
            <th>Control</th>
        </tr>
    </thead>

    <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-muted">there ara no categories</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div>
    {{ $categories->links() }}
</div>
@endsection