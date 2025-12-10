<?php

namespace App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;



class AdminDashboardController extends Controller
{
       public function index()
    {
        return view('admin.dashboard', [
            'blogsCount' => Blog::count(),
            'categoriesCount' => Category::count(),
            'usersCount' => User::count(),
        ]);
    }
}

