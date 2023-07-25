<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Slider;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Backend\StoreSliderRequest;
use App\Http\Requests\Backend\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = (new Slider)->sliderList();
        return view('backend.modules.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\StoreSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {
        $data = $request->all();

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 1920;
            $height = 760;
            $thumbWidth = 860;
            $thumbHeight = 640;
            $path = 'image/uploads/sliders/orginal/';
            $thumbPath = 'image/uploads/sliders/thumbnail/';
            $name = 'sliders-' . rand(111, 999) . '.webp';
            $data['photo'] = $name;
            Image::make($photo)->fit($width, $height)->save(public_path($path) . $name, 50);
            Image::make($photo)->fit($thumbWidth, $thumbHeight)->save(public_path($thumbPath) . $name, 50);
        }
        (new Slider())->sliderCreate($data);
        session()->flash('msg', 'slider add successfully');
        session()->flash('cls', 'success');
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Backend\UpdateSliderRequest  $request
     * @param  \App\Models\Backend\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
