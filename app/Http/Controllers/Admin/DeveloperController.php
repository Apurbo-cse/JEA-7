<?php

namespace App\Http\Controllers\Admin;

use App\Developer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['developers'] = Developer::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.developer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //eturn view('admin.developer.create');
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
            'location'=>'required',
            'degree'=>'required',
            'complete'=>'required',
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
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $developer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function edit(Developer $developer)
    {
        $data['developer']=$developer;
        return view('admin.developer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Developer $developer)
    {
        $request->validate([
            'name'=>'required',
            'digination'=>'required',
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

        $developer->update($data);
        session()->flash('success', 'Developer update Successfully');
        return redirect()->route('developer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Developer $developer)
    {
        //
    }
}
