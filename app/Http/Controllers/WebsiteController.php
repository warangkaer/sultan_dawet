<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        $menu = Menu::select('image', 'name', 'category', 'price')->get();
        // $location = DB::table('location_backgrounds')->latest()->first();
        // $main_img = DB::table('main_images')->latest()->take(3)->get();
        // $about = DB::table('about')->latest()->first();

        return view('layouts.master', compact('menu'));
    }

    public function create()
    {
        return view('layouts.admin');
    }

    public function storeLocation(Request $r)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        $imageName = getClientOriginalName().'.'.$request->image->extension();  

        $request->image->move(public_path('image-public'), $imageName);

        $location = DB::table('location_backgrounds')->insert([
            'image' => $r->image
        ]);
    
        return back()->with('success','Data Berhasil Diunggah!');
    }

    public function storeMainImage(Request $r)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        $imageName = getClientOriginalName().'.'.$request->image->extension();  

        $request->image->move(public_path('image-public'), $imageName);

        $main_img = DB::table('main_images')->insert([
            'image' => $r->image
        ]);
    
        return back()->with('success','Data Berhasil Diunggah!');
    }

    public function storeAbout(Request $r)
    {
        $request->validate([
            'about' => 'required'
        ]);

        $about = DB::table('about_us')->insert([
            'about_us' => $r->about
        ]);
    
        return back()->with('success','Data Berhasil Diunggah!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
