<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create admin
        User::factory()->admin()->create();

        // create 6 categories
        $categories = Category::factory(6)->create();

        // create 20 blogs and attach to categories randomly
        Blog::factory(20)->create()->each(function ($blog) use ($categories) {
            // pick 3 categories randomly
            $randomCategories = $categories->random(rand(1, 3))->pluck('id')->toArray();

            //  attach categories to blogs 
            $blog->categories()->attach($randomCategories);
        });
    }
}
