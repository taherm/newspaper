<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Category::find(1)->posts);
        $posts = Post::all();
        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = User::find(Auth::id())->categories;
        return view('backend.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'required',
            'category' => 'required'
        ]);
        $imageName =  $request->image->store('public/images');

        Post::create(['title_en' => $request->title_en, 'category_id' => $request->category, 'title_ar' => $request->title_ar, 'description_en' => $request->description_en, 'description_ar' => $request->description_ar, 'image' => $imageName]);
        session()->flash('message', 'Post Created!');
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = User::find(Auth::id())->categories;
        $post = Post::where('id', $id)->first();
        return view('backend.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'required',
            'category' => 'required',
        ]);
        //dd($request->image);
        $imageName =  $request->image->store('public/images');
        Post::whereId($id)->update(['title_en' => $request->title_en, 'category_id' => $request->category, 'title_ar' => $request->title_ar, 'description_en' => $request->description_en, 'description_ar' => $request->description_ar, 'image' => $imageName]);
        session()->flash('message', 'Post Updated!');
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        session()->flash('message', 'Post Deleted!');
        return redirect()->back();
    }
}
