@extends('admin.layouts.app')

@section('content')
<style>

    :root {
        --silver-light: #f1f2f6;
        --silver: #dfe4ea;
        --silver-dark: #ced6e0;
        --gray-text: #2f3542;
        --gray-dark: #1e272e;
    }

    .dashboard-title {
        font-weight: 700;
        color: var(--gray-dark);
        border-left: 6px solid var(--silver-dark);
        padding-left: 12px;
        margin-bottom: 30px;
    }

    .stat-card {
        border: none;
        border-radius: 12px;
        background: var(--silver-light);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        transition: 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }

    .stat-header {
        background: var(--silver-dark);
        color: var(--gray-dark);
        font-weight: 600;
        border-radius: 12px 12px 0 0;
        padding: 12px 16px;
        font-size: 1.1rem;
    }

    .stat-number {
        font-size: 2.4rem;
        font-weight: 700;
        color: var(--gray-dark);
        margin: 0;
        text-align: center;
        padding: 20px 0;
    }
</style>

<div class="container">
    <h1 class="dashboard-title">Control Panel</h1>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-header">
                    <i class="bi bi-journal-text me-1"></i> Blogs
                </div>
                <div class="card-body">
                    <p class="stat-number">{{ $blogsCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-header">
                    <i class="bi bi-tags me-1"></i> Categories
                </div>
                <div class="card-body">
                    <p class="stat-number">{{ $categoriesCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-header">
                    <i class="bi bi-people me-1"></i> Users
                </div>
                <div class="card-body">
                    <p class="stat-number">{{ $usersCount }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
