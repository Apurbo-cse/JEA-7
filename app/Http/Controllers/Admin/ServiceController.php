<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services']=Service::orderBy('id','desc')->get();
        $data['serial']=1;
        return view('admin.service.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.service::ACTIVE_STATUS.','.service::INACTIVE_STATUS,
        ]);
        
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;
        
        Service::create($data);
        session()->flash('success', 'Service Create Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $data['service'] = $service;
        return view('admin.service.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {

        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.service::ACTIVE_STATUS.','.service::INACTIVE_STATUS,
        ]);

        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $service->update($data) ;
        session()->flash('success', 'Service Updated Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service){
            $service->delete();

            session()->flash('success', 'service deleted successfully');
        }

        return redirect()->route('service.index');
    }
}
