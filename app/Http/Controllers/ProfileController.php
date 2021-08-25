<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function detailes($id)
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $user=User::findOrFail($id);
        $data['user']=$user;
        return view('frontend.user.detailes',$data);
    }
}
