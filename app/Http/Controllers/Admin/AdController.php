<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Ad;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        return view('backend.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ads.create');
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
            'url' => 'required',
            'image' => 'required'
        ]);
        $imageName =  $request->image->store('public/images');

        Ad::create(['url' => $request->url, 'image' => $imageName]);
        session()->flash('message', 'Ad Created!');
        return redirect(route('ad.index'));
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
        $ad = Ad::where('id', $id)->first();
        return view('backend.ads.edit', compact('ad'));
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
            'url' => 'required',
        ]);
        //dd($request->image);
        if ($request->image) {
            Storage::delete(Ad::find($id)->image);
            $imageName =  $request->image->store('public/images');
            Ad::whereId($id)->update(['url' => $request->url, 'image' => $imageName]);
        } else {
            Ad::whereId($id)->update(['url' => $request->url]);
        }

        session()->flash('message', 'Ad Updated!');
        return redirect(route('ad.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Storage::delete(Ad::find($id)->image);
        Ad::where('id', $id)->delete();
        session()->flash('message', 'Ad Deleted!');
        return redirect()->back();
    }
}
