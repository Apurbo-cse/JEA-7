<?php

namespace App\Http\Controllers\Admin;

use App\Abouth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbouthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['abouths'] = Abouth::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.abouth.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouth.create');
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
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:'.Abouth::ACTIVE_STATUS.','.Abouth::INACTIVE_STATUS,

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/abouth';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        Abouth::create($data);
        session()->flash('success', 'Abouth Create Successfully');
        return redirect()->route('abouth.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abouth  $abouth
     * @return \Illuminate\Http\Response
     */
    public function show(Abouth $abouth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abouth  $abouth
     * @return \Illuminate\Http\Response
     */
    public function edit(Abouth $abouth)
    {
        $data['abouth']=$abouth;
        return view('admin.abouth.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abouth  $abouth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abouth $abouth)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:'.Abouth::ACTIVE_STATUS.','.Abouth::INACTIVE_STATUS,
        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/abouth';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($abouth->image)){
                unlink($abouth->image);
            }
        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $abouth->update($data);
        session()->flash('success', 'Abouth Update Successfully');
        return redirect()->route('abouth.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abouth  $abouth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abouth $abouth)
    {
        if($abouth){
            if(file_exists(($abouth->image))){
                unlink($abouth->image);
            }

            $abouth->delete();
            session()->flash('success', 'Abouth deleted successfully');
        }

        return redirect()->route('abouth.index');
    }
}

