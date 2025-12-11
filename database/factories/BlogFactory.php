<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Blog;

/**
 * @extends Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        $title = fake()->sentence(6);
        return [
            'title'   => $title,
            'slug'    => Str::slug($title),
            'content' => fake()->paragraph(5, true),
            'image'   => 'blog/default.jpg',
        ];
    }
}
