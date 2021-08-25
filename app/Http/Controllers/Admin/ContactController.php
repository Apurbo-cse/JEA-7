<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contacts'] = Contact::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.contact.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
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
            'email'=>'required',
            'phone'=>'required',
            'location'=>'required',
            'time'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:'.Contact::ACTIVE_STATUS.','.Contact::INACTIVE_STATUS,

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/contact';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }
        

        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['location'] = $request->location;
        $data['time'] = $request->time;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;
        $data['twitter'] = $request->twitter;
        $data['linkedin'] = $request->linkedin;
        $data['status'] = $request->status;

        Contact::create($data);
        session()->flash('success', 'Contact Create Successfully');
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $data['contact']=$contact;
        return view('admin.contact.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'location'=>'required',
            'time'=>'required',
            'description'=>'required',
            'status' => 'required|in:'.Contact::ACTIVE_STATUS.','.Contact::INACTIVE_STATUS,

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/contact';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['location'] = $request->location;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;
        $data['twitter'] = $request->twitter;
        $data['linkedin'] = $request->linkedin;
        $data['time'] = $request->time;
        $data['status'] = $request->status;

        $contact->update($data);
        session()->flash('success', 'Contact Update Successfully');
        return redirect()->route('contact.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        if($contact){
            if(file_exists(($contact->image))){
                unlink($contact->image);
            }
            $contact->delete();
            session()->flash('success', 'Contact deleted successfully');
        }

        return redirect()->route('contact.index');
    }
}

