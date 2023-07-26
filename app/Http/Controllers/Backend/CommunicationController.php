<?php

namespace App\Http\Controllers\Backend;

use App\Http\Helper\Helper;
use App\Models\Backend\Slider;
use App\Http\Controllers\Controller;
use App\Models\Backend\Communication;
use App\Http\Requests\Backend\StoreCommunicationRequest;
use App\Http\Requests\Backend\UpdateCommunicationRequest;

class CommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = (new Communication)->communicationList();
        return view('backend.modules.communication.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.communication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\StoreCommunicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommunicationRequest $request)
    {
        $data = $request->all();
        $data['name'] = str_replace(' ', '-', $request->input('name'));
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 500;
            $height = 420;
            $thumbWidth = 400;
            $thumbHeight = 300;
            $path = 'image/uploads/communication/orginal/';
            $thumbPath = 'image/uploads/communication/thumbnail/';

            $name = strtolower($data['name']) . '-' . rand(111, 999) . '.webp';
            $data['photo'] = $name;

            Helper::imageUpload($photo, $width, $height, $path, $name);
            Helper::imageUpload($photo, $thumbWidth, $thumbHeight, $thumbPath, $name);
        }
        (new Communication())->communicationMemberAdd($data);
        session()->flash('msg', 'communication member added successfully');
        session()->flash('cls', 'success');
        return redirect()->route('communications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function show(Communication $communication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function edit(Communication $communication)
    {
        return view('backend.modules.communication.edit', compact('communication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Backend\UpdateCommunicationRequest  $request
     * @param  \App\Models\Backend\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommunicationRequest $request, Communication $communication)
    {
        $data = $request->all();
        $data['name'] = str_replace(' ', '-', $request->input('name'));
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 1920;
            $height = 760;
            $thumbWidth = 860;
            $thumbHeight = 640;
            $path = 'image/uploads/communication/orginal/';
            $thumbPath = 'image/uploads/communication/thumbnail/';
            $name =  $name = strtolower($data['name']) . '-' . rand(111, 999) . '.webp';
            $data['photo'] = $name;
            if (!empty($communication->photo)) {
                Helper::unlinkImage($path, $communication->photo);
                Helper::unlinkImage($thumbPath, $communication->photo);
            }
            Helper::imageUpload($photo, $width, $height, $path, $name);
            Helper::imageUpload($photo, $thumbWidth, $thumbHeight, $thumbPath, $name);
        }
        (new Communication())->communicationMemberUpdate($data, $communication);
        session()->flash('msg', 'communoication member updated successfully');
        session()->flash('cls', 'success');
        return redirect()->route('communications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Communication $communication)
    {
        $path = 'image/uploads/communication/orginal/';
        $thumbPath = 'image/uploads/communication/thumbnail/';

        if ($communication->photo != null) {
            Helper::unlinkImage($path, $communication->photo);
            Helper::unlinkImage($thumbPath, $communication->photo);
        }

        (new Communication())->deleteCommunicationMember($communication);
        session()->flash('msg', 'Communication member deleted successfully');
        session()->flash('cls', 'warning');
        return redirect()->back();
    }
}
