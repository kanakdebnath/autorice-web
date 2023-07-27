<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactUsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactUsRequest $request)
    {
        $data = $request->all();

        ContactUs::create($data);
        session()->flash('msg', 'your message submit successfully');
        return redirect()->back();
    }
}
