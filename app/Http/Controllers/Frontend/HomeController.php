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
        //$ads = Ad::all();
        //dd($posts->take(5));
        return view('frontend.index', compact('posts'));
    }


    public function showpost($id)
    {
        $posts = Post::all();
        $post = Post::find($id);

        $ads = Ad::all();
        //dd($post);
        return view('frontend.post', compact('post', 'posts', 'ads'));
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

        $current_category = Category::find($id);
        $posts = $current_category->posts;
        //dd($posts[2]->user);
        // dd($posts);
        $ads = Ad::all();
        return view('frontend.category', compact('posts', 'current_category', 'ads'));
    }


    public function search_results()
    {
        $search_name = $_GET['posts'];
        //$categories = Category::all();
        //$current_category = Category::find($id);
        //$posts = $current_category->posts;
        //dd($posts[2]->user);
        // dd($posts);
        $ads = Ad::all();
        $posts = Post::all();
        $search_data = \App\Post::where([
            ['title_en', 'LIKE', '%' . $search_name . '%'],
        ])->get();
        //dd($data);
        return view('frontend.search_results', compact('search_data', 'ads', 'search_name', 'posts'));
    }
}
