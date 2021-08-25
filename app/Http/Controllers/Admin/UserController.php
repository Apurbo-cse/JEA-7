<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['services'] = DB::table('services')->limit(20)->get();
        return view('admin.user.index',$data);
    }

}
