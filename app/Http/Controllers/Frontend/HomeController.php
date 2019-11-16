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
        $posts = Post::all();
        //$category_with_children = Category::with('children')->get();
        $categories = Category::all();
        //dd($categories);
        $ads = Ad::all();
        // $root_categories = Category::whereNull('parent_id')->get();
        //dd($posts->take(1));
        return view('frontend.index', compact('posts', 'categories', 'ads'));
    }


    public function showpost($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $ads = Ad::all();
        //dd($post);
        return view('frontend.post', compact('post', 'categories', 'ads'));
    }

    public function changeLanguage()
    {
        //dd(request()->locale);
        app()->setLocale(request('locale'));
        session()->put('locale', request('locale'));
        return redirect()->back();
    }

    public function category($id)
    {
        $categories = Category::all();
        $current_category = Category::find($id);
        $posts = $current_category->posts;
        //dd($posts[2]->user);
        // dd($posts);
        $ads = Ad::all();
        return view('frontend.category', compact('categories', 'posts', 'current_category', 'ads'));
    }


    public function search_results()
    {
        $posts = $_GET['posts'];
        $categories = Category::all();
        //$current_category = Category::find($id);
        //$posts = $current_category->posts;
        //dd($posts[2]->user);
        // dd($posts);
        $ads = Ad::all();
        $search_data = \App\Post::where([
            ['title_en', 'LIKE', '%' . $posts . '%'],
        ])->get();
        //dd($data);
        return view('frontend.search_results', compact('search_data', 'ads', 'categories', 'posts'));
    }
}
