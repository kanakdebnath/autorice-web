<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('front.index');
    }
}
