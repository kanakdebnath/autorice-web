<?php

namespace App\Http\Controllers\Backend;

use App\Http\Helper\Helper;
use App\Models\Backend\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreGalleryRequest;
use App\Http\Requests\Backend\UpdateGalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleryPhotos = Gallery::orderBy('id', 'desc')->paginate(10);
        return view('backend.modules.gallery.index', compact('galleryPhotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        $data = $request->all();
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 500;
            $height = 420;
            $thumbWidth = 400;
            $thumbHeight = 300;
            $path = 'image/uploads/gallery/orginal/';
            $thumbPath = 'image/uploads/gallery/thumbnail/';

            $name = 'gallery-photo' . '-' . rand(111, 999) . '.webp';
            $data['photo'] = $name;

            Helper::imageUpload($photo, $width, $height, $path, $name);
            Helper::imageUpload($photo, $thumbWidth, $thumbHeight, $thumbPath, $name);
        }
        (new Gallery())->galleryPhotoAdd($data);
        session()->flash('msg', 'Gallery photo added successfully');
        session()->flash('cls', 'success');
        return redirect()->route('gallery-photos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.modules.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Backend\UpdateGalleryRequest  $request
     * @param  \App\Models\Backend\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request,  $id)
    {
        $gallery = Gallery::findOrFail($id);
        $data = $request->all();

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 500;
            $height = 420;
            $thumbWidth = 400;
            $thumbHeight = 300;
            $path = 'image/uploads/gallery/orginal/';
            $thumbPath = 'image/uploads/gallery/thumbnail/';

            $name = 'gallery-photo' . '-' . rand(111, 999) . '.webp';
            $data['photo'] = $name;

            if (!empty($gallery->photo)) {
                Helper::unlinkImage($path, $gallery->photo);
                Helper::unlinkImage($thumbPath, $gallery->photo);
            }

            Helper::imageUpload($photo, $width, $height, $path, $name);
            Helper::imageUpload($photo, $thumbWidth, $thumbHeight, $thumbPath, $name);
        }
        $gallery->update($data);
        session()->flash('msg', 'Gallery photo updated successfully');
        session()->flash('cls', 'success');
        return redirect()->route('gallery-photos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $path = 'image/uploads/gallery/orginal/';
        $thumbPath = 'image/uploads/gallery/thumbnail/';
        if (!empty($gallery->photo)) {
            Helper::unlinkImage($path, $gallery->photo);
            Helper::unlinkImage($thumbPath, $gallery->photo);
        }
        $gallery->delete();
        session()->flash('msg', 'Gallery photo deleted successfully');
        session()->flash('cls', 'warning');
        return redirect()->back();
    }
}
