<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        return view('frontend.contact',$data);
    }
}
