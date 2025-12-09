<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $fillable =[
        'title',
        'content',
        'image',
    ];
    public function boot(){
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
}
