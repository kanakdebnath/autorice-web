<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreServiceRequest;
use App\Http\Requests\Backend\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = (new Service)->serviceList();
        return view('backend.modules.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {

        $data = $request->all();
        (new Service())->serviceStore($data);

        session()->flash('msg', 'service added successfully');
        session()->flash('cls', 'success');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('backend.modules.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backend.modules.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Backend\UpdateServiceRequest  $request
     * @param  \App\Models\Backend\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->all();
        (new Service())->serviceUpdate($data, $service);

        session()->flash('msg', 'service updated successfully');
        session()->flash('cls', 'success');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        (new Service())->serviceDelete($service);

        session()->flash('msg', 'service deleted successfully');
        session()->flash('cls', 'warning');
        return redirect()->back();
    }
}
