<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::find(1);
        //$category_with_children = Category::with('children')->get();
        $categories = Category::all();
        //dd($categories);
        $ads = Ad::all();
        // $root_categories = Category::whereNull('parent_id')->get();
        return view('frontend.index', compact('posts', 'categories', 'ads'));
    }


    public function showpost($id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        //dd($post);
        return view('frontend.post', compact('post', 'categories'));
    }

    public function changeLanguage()
    {
        //dd(request()->locale);
        app()->setLocale(request('locale'));
        session()->put('locale', request('locale'));
        return redirect()->back();
    }
}
