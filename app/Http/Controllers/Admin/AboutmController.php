<?php

namespace App\Http\Controllers\Admin;

use App\Aboutm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['aboutms'] = Aboutm::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.aboutm.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutm.create');
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
            'status' => 'required|in:'.Aboutm::ACTIVE_STATUS.','.Aboutm::INACTIVE_STATUS,

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/aboutm';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        Aboutm::create($data);
        session()->flash('success', 'Aboutm Create Successfully');
        return redirect()->route('aboutm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aboutm  $aboutm
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutm $aboutm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aboutm  $aboutm
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutm $aboutm)
    {
        $data['aboutm']=$aboutm;
        return view('admin.aboutm.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aboutm  $aboutm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutm $aboutm)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:'.Aboutm::ACTIVE_STATUS.','.Aboutm::INACTIVE_STATUS,
        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/aboutm';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($aboutm->image)){
                unlink($aboutm->image);
            }
        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $aboutm->update($data);
        session()->flash('success', 'Aboutm Update Successfully');
        return redirect()->route('aboutm.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aboutm  $aboutm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutm $aboutm)
    {
        if($aboutm){
            if(file_exists(($aboutm->image))){
                unlink($aboutm->image);
            }

            $aboutm->delete();
            session()->flash('success', 'Aboutm deleted successfully');
        }

        return redirect()->route('aboutm.index');
    }
}


