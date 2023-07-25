<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function notice()
    {
        return view('frontend.pages.notice');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
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
