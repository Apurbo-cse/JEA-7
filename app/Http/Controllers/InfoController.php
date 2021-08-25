<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function msc()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        return view('frontend.info.president',$data);
    }

    public function bsc()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        return view('frontend.info.convening_member',$data);
    }

    public function developer()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $data['developers'] = DB::table('developers')->limit(1)->get();
        return view('frontend.info.developer',$data);
    }


}