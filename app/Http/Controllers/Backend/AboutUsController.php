<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\AboutUs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function create()
    {
        return view('backend.modules.about.aboutus');
    }

    public  function store(Request $request)
    {

        foreach ($_POST as $key => $value) {
            if ($key == '_token') {
                continue;
            }

            $data = array();
            $data['value'] = $value;

            $about = AboutUs::where('name', $key)->first();
            if (!empty($about)) {
                $about->update($data);
            } else {
                $data['name'] = $key;
                AboutUs::create($data);
            }
        }
        session()->flash('msg', 'About us updated successfully.');
        session()->flash('cls', 'success');
        return redirect()->back();
    }
}
