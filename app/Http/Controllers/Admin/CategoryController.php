<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $c = Category::find(2);
        // dd($c->children->count());
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = Category::where('parent_id', 0)->get();
        return view('backend.categories.create', compact('parent_categories'));
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
        ]);
        Category::create(['title_en' => $request->title_en, 'title_ar' => $request->title_ar, 'parent_id' => $request->parent_id]);
        session()->flash('message', 'Category Created!');
        return redirect(route('category.index'));
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
        $parent_categories = Category::where('parent_id', 0)->get();
        $category = Category::where('id', $id)->first();
        // dd($category);
        return view('backend.categories.edit', compact('category', 'parent_categories'));
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
            'parent_id' => 'required',
        ]);
        Category::whereId($id)->update(['title_en' => $request->title_en, 'title_ar' => $request->title_ar, 'parent_id' => $request->parent_id]);
        session()->flash('message', 'Category Updated!');
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        session()->flash('message', 'Category Deleted!');
        return redirect()->back();
    }
}
