<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Backend\Notice;
use App\Models\Backend\Slider;
use App\Models\Backend\Service;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\Communication;
use App\Models\Backend\Gallery;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = (new Slider)->sliderList();
        $services = Service::orderBy('id', 'desc')->get();
        $communications = Communication::orderBy('id', 'desc')->get();
        return view('frontend.index', compact('sliders', 'services', 'communications'));
    }

    public function notice()
    {
        $notices = Notice::orderBy('id', 'desc')->get();
        return view('frontend.pages.notice', compact('notices'));
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('frontend.pages.gallery', compact('galleries'));
    }


    public function contactUs()
    {
        return view('frontend.pages.contactUs');
    }

    public function aboutUs()
    {

        return view('frontend.pages.about.about-us');
    }

    public function process()
    {
        return view('frontend.pages.about.process');
    }

    public function infrastructure()
    {
        return view('frontend.pages.about.infrastructure');
    }

    public function companyProfile()
    {
        return view('frontend.pages.about.company-profile');
    }
}
