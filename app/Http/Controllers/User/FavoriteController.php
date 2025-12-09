<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function toggle(Blog $blog)
    {
         $user = Auth()->user();
         
         $isFavorite=$user->favorites()->where("blog_id",$blog->id)->exists();
         if($isFavorite){
            $user->favorites()->deattach($blog->id);
            $blog->decrement("favorite_count");
         }
         else {
            $user->favorites()->attach($blog->id);
            $blog->increment("favorite_count");

         }

         return back()->with('success' ,'updated favorites');
    }
    public function index()
    {
        $favorites = Auth()->user()->favorites()->latest()->paginate(10);
        return view('user.favorite.index' ,compact('favorites'));
    }
   


}
    