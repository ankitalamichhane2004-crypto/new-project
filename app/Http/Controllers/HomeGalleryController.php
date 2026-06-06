<?php

namespace App\Http\Controllers;

use App\Models\HomeGallery;
use Illuminate\Http\Request;

class HomeGalleryController extends Controller
{
    public function index()
    {
        $galleries = HomeGallery::all();
        return view('admin.homegallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.homegallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        HomeGallery::create([
            'image' => $imageName
        ]);

        return redirect()->route('home-gallery.index');
    }

    public function edit(HomeGallery $homeGallery)
    {
        return view('admin.homegallery.edit', compact('homeGallery'));
    }

    public function update(Request $request, HomeGallery $homeGallery)
    {
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $homeGallery->image = $imageName;
        }

        $homeGallery->save();

        return redirect()->route('home-gallery.index');
    }

    public function destroy(HomeGallery $homeGallery)
    {
        $homeGallery->delete();
        return back();
    }
}