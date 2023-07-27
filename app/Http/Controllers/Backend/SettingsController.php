<?php

namespace App\Http\Controllers\Backend;


use DB;
use Carbon\Carbon;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Backend\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{

    /**
     * Summary of general_settings
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function general_settings()
    {
        return view('backend.settings.general');
    }


    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function store(Request $request)
    {

        foreach ($_POST as $key => $value) {
            if ($key == "_token") {
                continue;
            }

            $data = array();
            $data['value'] = $value;

            $data['updated_at'] = Carbon::now();
            if (Setting::where('name', $key)->exists()) {
                Setting::where('name', '=', $key)->update($data);
            } else {
                $data['name'] = $key;
                $data['created_at'] = Carbon::now();

                Setting::insert($data);
            }
        }

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $extension = $file->extension() ?: 'png';
            $picture = str_random(10) . '.' . $extension;

            // for resize image
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(671, 192);

            // if file chnage then delete old one
            $oldFile = $request->get('oldLogo', '');
            if ($oldFile != '') {
                $file_path = public_path() . '/storage/logo/' . $oldFile;
                unlink($file_path);
            }

            $destinationPath = public_path() . '/storage/logo/';
            $image_resize->save($destinationPath . '/' . $picture);

            $logo['name'] = 'logo';
            $logo['value'] = $picture;
        } else {

            $logo['name'] = 'logo';
            $logo['value'] = $request->get('oldLogo', '');
        }

        if ($request->hasFile('favicon')) {

            $file = $request->file('favicon');
            $extension = $file->extension() ?: 'png';
            $picture1 = str_random(10) . '.' . $extension;

            // for resize image
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(16, 16);

            // if file chnage then delete old one
            $oldFile1 = $request->get('oldfavicon', '');
            if ($oldFile1 != '') {
                $file_path1 = public_path() . '/storage/logo/' . $oldFile1;
                unlink($file_path1);
            }

            $destinationPath = public_path() . '/storage/logo/';
            $image_resize->save($destinationPath . '/' . $picture1);

            $data1['name'] = 'favicon';
            $data1['value'] = $picture1;
        } else {

            $data1['name'] = 'favicon';
            $data1['value'] = $request->get('oldfavicon', '');
        }


        if (Setting::where('name', "logo")->exists()) {
            Setting::where('name', '=', "logo")->update($logo);
        } else {
            $logo['created_at'] = Carbon::now();
            Setting::insert($logo);
        }

        if (Setting::where('name', "favicon")->exists()) {
            Setting::where('name', '=', "favicon")->update($data1);
        } else {
            $data1['created_at'] = Carbon::now();
            Setting::insert($data1);
        }


        session()->flash('msg', 'Settings updated successfully');
        session()->flash('cls', 'success');
        return redirect()->back();
    }
}
