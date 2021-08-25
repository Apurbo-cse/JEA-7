<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
  
    public function gallery()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $data['galleries'] = DB::table('galleries')->where('status', 'active')->get();
        return view('frontend.gallery', $data);
    }
}
