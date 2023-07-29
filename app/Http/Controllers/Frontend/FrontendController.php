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
use App\Models\Backend\Product;

class FrontendController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sliders = (new Slider)->sliderList();
        $services = Service::orderBy('id', 'desc')->get();
        $products = Product::where('status', Product::ACTIVE)->orderBy('id', 'desc')->get();
        $communications = Communication::orderBy('id', 'desc')->get();
        return view('frontend.index', compact('sliders', 'services', 'communications', 'products'));
    }

    /**
     * Summary of notice
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function notice()
    {
        $notices = Notice::orderBy('id', 'desc')->get();
        return view('frontend.pages.notice', compact('notices'));
    }

    /**
     * Summary of gallery
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function gallery()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('frontend.pages.gallery', compact('galleries'));
    }


    /**
     * Summary of contactUs
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contactUs()
    {
        return view('frontend.pages.contactUs');
    }

    /**
     * Summary of aboutUs
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function aboutUs()
    {

        return view('frontend.pages.about.about-us');
    }

    /**
     * Summary of process
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function process()
    {
        return view('frontend.pages.about.process');
    }

    /**
     * Summary of infrastructure
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function infrastructure()
    {
        return view('frontend.pages.about.infrastructure');
    }
}
