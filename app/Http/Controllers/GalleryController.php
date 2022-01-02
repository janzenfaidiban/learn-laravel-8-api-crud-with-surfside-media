<?php

namespace App\Http\Controllers;

use App\Http\Resources\GalleryResource;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{

    public function index()
    {
        $gallery = Gallery::paginate(2);
        return GalleryResource::collection($gallery);
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->slug = str_slug($request->title);
        $gallery->image = $request->image;
        $gallery->description = $request->description;
        if($gallery->save()){
            return new galleryResource($gallery);
        }
    }
    
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return new GalleryResource($gallery);
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->title;
        $gallery->slug = str_slug($request->title);
        $gallery->image = $request->image;
        $gallery->description = $request->description;
        if($gallery->save()){
            return new GalleryResource($gallery);
        }
    }
    
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if($gallery->delete()){
            return new GalleryResource($gallery);
        }
    }
}
