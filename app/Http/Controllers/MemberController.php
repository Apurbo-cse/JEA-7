<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['members'] = Member::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('frontend.member.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.member.create');
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
            'date_of_brith'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/Member';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }
        

        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['date_of_brith'] = $request->date_of_brith;
        $data['blood'] = $request->blood;
        $data['degree'] = $request->degree;
        $data['jobtype'] = $request->jobtype;

        Member::create($data);
        session()->flash('success', 'Member Create Successfully');
        return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $data['member']=$member;
        return view('frontend.member.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'date_of_brith'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/Member';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['location'] = $request->location;
        $data['blood'] = $request->blood;
        $data['degree'] = $request->degree;
        $data['jobtype'] = $request->jobtype;

        $member->update($data);
        session()->flash('success', 'Member Update Successfully');
        return redirect()->route('member.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        if($member){
            if(file_exists(($member->image))){
                unlink($member->image);
            }
            $member->delete();
            session()->flash('success', 'Member deleted successfully');
        }

        return redirect()->route('member.index');
    }
}

