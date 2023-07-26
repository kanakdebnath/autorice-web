<?php

namespace App\Http\Controllers\Backend;

use App\Http\Helper\Helper;
use App\Models\Backend\Notice;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreNoticeRequest;
use App\Http\Requests\Backend\UpdateNoticeRequest;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = (new Notice)->noticeList();
        return view('backend.modules.notice.index', compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\StoreNoticeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticeRequest $request)
    {
        $data = $request->all();
        $photoName = str_replace(' ', '-', $request->input('title'));
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 800;
            $height = 760;
            $thumbWidth = 600;
            $thumbHeight = 600;
            $path = 'image/uploads/notice/orginal/';
            $thumbPath = 'image/uploads/notice/thumbnail/';
            $name = $photoName . '-' . rand(111, 999) . '.webp';
            $data['photo'] = $name;
            Helper::imageUpload($photo, $width, $height, $path, $name);
            Helper::imageUpload($photo, $thumbWidth, $thumbHeight, $thumbPath, $name);
        }
        (new Notice())->noticeCreate($data);
        session()->flash('msg', 'notice added successfully');
        session()->flash('cls', 'success');
        return redirect()->route('notices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        return view('backend.modules.notice.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view('backend.modules.notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Backend\UpdateNoticeRequest  $request
     * @param  \App\Models\Backend\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoticeRequest $request, Notice $notice)
    {
        $data = $request->all();

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 800;
            $height = 760;
            $thumbWidth = 600;
            $thumbHeight = 600;
            $path = 'image/uploads/notice/orginal/';
            $thumbPath = 'image/uploads/notice/thumbnail/';
            $name = 'sliders-' . rand(111, 999) . '.webp';
            $data['photo'] = $name;
            if (!empty($notice->photo)) {
                Helper::unlinkImage($path, $notice->photo);
                Helper::unlinkImage($thumbPath, $notice->photo);
            }
            Helper::imageUpload($photo, $width, $height, $path, $name);
            Helper::imageUpload($photo, $thumbWidth, $thumbHeight, $thumbPath, $name);
        }
        (new Notice())->noticeUpdate($data, $notice);
        session()->flash('msg', 'notice update successfully');
        session()->flash('cls', 'success');
        return redirect()->route('notices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        $path = 'image/uploads/notice/orginal/';
        $thumbPath = 'image/uploads/notice/thumbnail/';
        if (!empty($notice->photo)) {
            Helper::unlinkImage($path, $notice->photo);
            Helper::unlinkImage($thumbPath, $notice->photo);
        }

        (new Notice())->noticeDelete($notice);
        session()->flash('msg', 'notice deleted successfully');
        session()->flash('cls', 'warning');
        return redirect()->back();
    }
}
