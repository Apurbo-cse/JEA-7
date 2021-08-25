<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pages'] = Page::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:'.Page::ACTIVE_STATUS.','.Page::INACTIVE_STATUS,

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/page';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['title'] = $request->title;
        $data['status'] = $request->status;

        Page::create($data);
        session()->flash('success', 'Page Link Create Successfully');
        return redirect()->route('page.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $data['page']=$page;
        return view('admin.page.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:'.Page::ACTIVE_STATUS.','.Page::INACTIVE_STATUS,
        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/page';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($page->image)){
                unlink($page->image);
            }
        }

        $data['title'] = $request->title;
        $data['status'] = $request->status;

        $page->update($data);
        session()->flash('success', 'Page Link Update Successfully');
        return redirect()->route('page.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if($page){
            if(file_exists(($page->image))){
                unlink($page->image);
            }

            $page->delete();
            session()->flash('success', 'Page link deleted successfully');
        }

        return redirect()->route('page.index');
    }
}
