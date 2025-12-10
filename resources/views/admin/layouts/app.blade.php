<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - @yield('title')</title>

    <!-- Bootstrap RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background: #343a40;
        }

        .sidebar a {
            color: #ddd;
            padding: 12px;
            display: block;
            text-decoration: none;
            font-size: 15px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #495057;
            color: #fff;
        }

        .content {
            padding: 20px;
        }
    </style>

</head>

<body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="sidebar p-3">

        <h4 class="text-white mb-4">admin</h4>

        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            📊 admin panel 
        </a>

        <a href="{{ route('admin.blogs.index') }}" class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
            📝 blos
        </a>

        <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
            🗂 categories
        </a>

        <a href="{{ route('admin.blogs.trash') }}" class="{{ request()->routeIs('admin.blogs.trash') ? 'active' : '' }}">
            🗑  Recycle bin
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-3">
            @csrf
            <button class="btn btn-danger w-100">log out</button> 
        </form>

    </div>

    <!-- Main Content -->
    <div class="content flex-fill">
        <h3 class="mb-4">@yield('title')</h3>

        @yield('content')
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>