<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EngineersController extends Controller
{
    public function msc()
    {
        $contacts = DB::table('contacts')->limit(1)->get();
        $users = DB::table('users')->whereIn('course_name', ['MSc in Engineering','EMBA\MBA'])->get();
        return view('frontend.engineer.msc',compact('contacts','users'));
    }

    public function bsc()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $data['users'] = User::where('course_name', 'BSc in Engineering')->get();
        return view('frontend.engineer.bsc',$data);
    }

    public function diplomabsc()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $data['users'] = User::where('course_name', 'BSc in Engineering (Diploma)')->get();
        return view('frontend.engineer.diplomabsc',$data);
    }

    public function diploma()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $data['users'] = User::where('course_name', 'Diploma in Engineering')->get();
        return view('frontend.engineer.diploma',$data);
    }

}
