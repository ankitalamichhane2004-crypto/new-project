<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    // INDEX PAGE
    public function index()
    {

        $datas = Gallery::get();

        return view('admin.gallery.index',
        compact('datas'));
    }



    // CREATE PAGE
    public function create()
    {

        return view('admin.gallery.create');
    }



    // STORE DATA
    public function store(Request $request)
    {

        $data = $request->all();

        if($request->hasFile('image1'))
        {

            $path = $request->file('image1')
                            ->store('images','public');

            $data['image1'] = $path;
        }

        Gallery::create($data);

        return redirect()->route('gallery.index');
    }



    // SHOW PAGE
    public function show(Gallery $gallery)
    {

        return view('admin.gallery.show',
        compact('gallery'));
    }



    // EDIT PAGE
    public function edit(Gallery $gallery)
    {

        return view('admin.gallery.edit',
        compact('gallery'));
    }



    // UPDATE DATA
    public function update(Request $request,
                           Gallery $gallery)
    {

        $data = $request->all();

        if($request->hasFile('image1'))
        {

            if($gallery->image1)
            {

                Storage::disk('public')
                ->delete($gallery->image1);
            }

            $path = $request->file('image1')
                            ->store('images','public');

            $data['image1'] = $path;
        }

        $gallery->update($data);

        return redirect()->route('gallery.index');
    }



    // DELETE DATA
    public function destroy(Gallery $gallery)
    {

        if($gallery->image1)
        {

            Storage::disk('public')
            ->delete($gallery->image1);
        }

        $gallery->delete();

        return redirect()->route('gallery.index');
    }

}