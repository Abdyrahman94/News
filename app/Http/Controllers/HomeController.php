<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home_index(){

        
        $categories = Category::withCount('posts')->get();

        return view('home.index')->with([
            'categories' => $categories, 
        ]);
        
    }

    public function locale($locale)
    {
        $locale = in_array($locale, ['tm', 'ru']) ? $locale : 'en';
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
