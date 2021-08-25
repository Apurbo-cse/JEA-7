<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $data['services'] = DB::table('services')->get();
        $data['abouths'] = DB::table('abouths')->where('status', 'active')->limit(1)->get();
        $data['sliders'] = DB::table('sliders')->where('status', 'active')->limit(4)->get();
        return view('frontend.home',$data);
    }
    public function signin()
    {
        return view('frontend.signin');
    }
}
