<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts_index(Request $request)
    {

        $request->validate([
            'categoryId' => ['nullable' , 'integer' , 'min:1']
        ]);

        $f_category = $request->categoryId ? $request->categoryId : 0;

        $posts = Post::when($f_category, function ($query) use ($f_category) {
            return $query->where('category_id', $f_category);
        })
        
        ->paginate(10)
        ->withQueryString();
        
        $categories_2 = Category::get();

        return view('posts.index')->with([
            'posts' => $posts,
            'categories_2' => $categories_2,
        ]);
    }
}
