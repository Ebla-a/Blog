<?php

namespace App\Models;

use \App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable =[
        'title',
        'content',
        'image',
    ];
    public static function boot(){
        parent::boot();
        static::creating(function($blog){
            $blog->slug = Str::slug($blog->title);
        });
    }
    public function categories(){
        return $this->belongsToMany(Category::class ,'blog_category' ,'blog_id' ,'category_id');
    }
     public function favoritedBy(){
        return $this->belongsToMany(User::class,'favorites')->withTimestamps();
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
