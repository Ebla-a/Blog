<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> control panel @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        
        :root {
            --silver-light: #f1f2f6;
            --silver: #dfe4ea;
            --silver-dark: #ced6e0;
            --gray-dark: #2f3542;
            --gray-text: #57606f;
        }

        body {
            background: var(--silver-light);
            font-family: "Tajawal", sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: var(--gray-dark);
            color: #fff;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar h4 {
            font-weight: 700;
            margin-bottom: 25px;
        }

        .sidebar a {
            color: #dcdde1;
            padding: 12px 15px;
            display: block;
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 6px;
            transition: 0.25s ease;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: var(--silver-dark);
            color: var(--gray-dark);
            font-weight: 600;
        }

        /* Main content */
        .content {
            padding: 30px;
        }

        .content h3 {
            color: var(--gray-dark);
            font-weight: 700;
            border-right: 5px solid var(--silver-dark);
            padding-right: 12px;
        }

        .top-nav {
            background: var(--silver);
            padding: 10px 20px;
            border-bottom: 1px solid var(--silver-dark);
            text-align: left;
        }
    </style>
</head>

<body>

<!-- Top bar -->
<div class="top-nav">
    <a href="{{ route('frontend.index') }}" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-globe"></i>  Home
    </a>
</div>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="sidebar p-3">

        <h4>لوحة التحكم</h4>

        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2 me-1"></i>  Controle panel
        </a>

        <a href="{{ route('admin.blogs.index') }}" class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
            <i class="bi bi-journal-text me-1"></i> Blogs
        </a>

        <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
            <i class="bi bi-tags me-1"></i> Categories
        </a>

        <a href="{{ route('admin.blogs.trash') }}" class="{{ request()->routeIs('admin.blogs.trash') ? 'active' : '' }}">
            <i class="bi bi-trash me-1"></i>  Recycle Bin
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button class="btn btn-danger w-100">
                <i class="bi bi-box-arrow-right"></i>  LogOut
            </button>
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
