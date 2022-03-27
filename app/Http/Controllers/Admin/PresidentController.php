<?php

namespace App\Http\Controllers\Admin;

use App\President;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['presidents'] = President::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.president.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'digination'=>'required',
            'company'=>'required',
            'location'=>'required',
            'email'=>'required',
            'email'=>'required',
            'email'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/developer';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }
        

            $data['name'] = $request->name;
            $data['digination'] = $request->digination;
            $data['location'] = $request->location;
            $data['degree'] = $request->degree;
            $data['complete'] = $request->complete;

            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['facebook'] = $request->facebook;
            $data['twitter'] = $request->twitter;
            $data['linkedin'] = $request->linkedin;

            $data['description'] = $request->description;

            Developer::create($data);
            session()->flash('success', 'Developer Create Successfully');
            return redirect()->route('developer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\President  $president
     * @return \Illuminate\Http\Response
     */
    public function show(President $president)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\President  $president
     * @return \Illuminate\Http\Response
     */
    public function edit(President $president)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\President  $president
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, President $president)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\President  $president
     * @return \Illuminate\Http\Response
     */
    public function destroy(President $president)
    {
        //
    }
}
