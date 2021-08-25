<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admincontact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdmincontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['admincontacts'] = Admincontact::orderBy('created_at', 'DESC')->paginate(10);
        $data['serial'] = 1;
        return view('admin.admincontact.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admincontact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'phone'=>'required',
            'location'=>'required',
            'description'=>'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['location'] = $request->location;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;
        $data['twitter'] = $request->twitter;
        $data['linkedin'] = $request->linkedin;
        $data['description'] = $request->description;


        Admincontact::create($data);
        session()->flash('success', 'Admincontact Create Successfully');
        return redirect()->route('Admincontact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admincontact  $admincontact
     * @return \Illuminate\Http\Response
     */
    public function show(Admincontact $admincontact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admincontact  $admincontact
     * @return \Illuminate\Http\Response
     */
    public function edit(Admincontact $admincontact)
    {
        $data['admincontact']= $admincontact;
        return view('admin.admincontact.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admincontact  $admincontact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admincontact $admincontact)
    {
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'phone'=>'required',
            'location'=>'required',
            'description'=>'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['location'] = $request->location;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;
        $data['twitter'] = $request->twitter;
        $data['linkedin'] = $request->linkedin;
        $data['description'] = $request->description;

        $admincontact->update($data);
        session()->flash('success', 'Admin Info Update Successfully');
        return redirect()->route('admincontact.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admincontact  $admincontact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admincontact $admincontact)
    {
        if($admincontact){
            $admincontact->delete();

            session()->flash('success', 'Admincontact deleted successfully');
        }

        return redirect()->back();
    }
}
