<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Auth;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Gate;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->authorize('isAdmin');
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin');
        //$categories = User::find(Auth::id())->categories;
        //dd($categories);
        $categories = Category::all();
        return view('backend.users.create', compact('categories'));
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
            'name' => 'required',

        ]);
        $username = Auth::user();
        //dd($request->categories);
        $user = User::create(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password)]);
        $user->categories()->sync(request('categories'));
        // $user->categories()->attach($username, $request->categories);
        session()->flash('message', 'User Added!');
        return redirect(route('user.index'));
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
        $this->authorize('isAdmin');
        $user = User::where('id', $id)->first();
        $categories = Category::all();
        //dd($categories);
        return view('backend.users.edit', compact('user', 'categories'));
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
            'name' => 'required',
        ]);
        User::whereId($id)->update(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password)]);
        User::find($id)->categories()->sync(request('categories'));
        session()->flash('message', 'User Updated!');
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin');
        User::find($id)->categories()->detach();
        User::where('id', $id)->delete();
        session()->flash('message', 'User Deleted!');
        return redirect()->back();
    }
}
