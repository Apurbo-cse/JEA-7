<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
   
    public function about(){
       
        $data['abouts'] = DB::table('abouts')->where('status', 'active')->limit(1)->get();
        $data['aboutms'] = DB::table('aboutms')->where('status', 'active')->get();
        $data['abouths'] = DB::table('abouths')->where('status', 'active')->get();
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        return view('frontend.about', $data);
    }
    

}
