<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index()
    {
        $datas = HeroSection::get();

        return view('admin.hero.index', compact('datas'));
    }

    public function create()
    {
        return view('admin.hero.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'video' => 'required|mimes:mp4,webm,ogg'
    ]);

    $videoName = time().'.'.$request->video->extension();
    $request->video->move(public_path('videos'), $videoName);

    HeroSection::create([
        'title' => $request->title,
        'video' => $videoName,
    ]);

    return redirect()->route('hero.index');
}
    public function edit($id)
    {
        $data = HeroSection::findOrFail($id);

        return view('admin.hero.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = HeroSection::findOrFail($id);

        if($request->hasFile('video'))
        {
            $videoName = time().'.'.$request->video->extension();

            $request->video->move(public_path('videos'), $videoName);

            $data->video = $videoName;
        }

        $data->title = $request->title;

        $data->save();

        return redirect()->route('hero.index');
    }

    public function destroy($id)
    {
        $data = HeroSection::findOrFail($id);

        $data->delete();

        return redirect()->route('hero.index');
    }
}