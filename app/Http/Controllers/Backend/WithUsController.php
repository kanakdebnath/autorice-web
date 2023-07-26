<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\WithUs;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreWithUsRequest;
use App\Http\Requests\Backend\UpdateWithUsRequest;

class WithUsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $withus = WithUs::latest()->first();
        return view('backend.modules.withUs.with-us', compact('withus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\StoreWithUsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWithUsRequest $request, $id)
    {
        $data = $request->all();
        $withUs = WithUs::findOrFail($id);
        $withUs->update($data);
        session()->flash('msg', 'with us updated successfully');
        session()->flash('cls', 'success');
        return redirect()->back();
    }
}
