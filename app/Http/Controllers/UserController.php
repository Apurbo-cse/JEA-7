<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function userprofile()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        return view('frontend.user.index',$data);
    }

    public function myprofile()
    {   
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        return view('frontend.user.edit', $data);
    }
 
    public function profileupdate(Request $request)
    {  
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $request->validate([
            'course_name' => 'required',
            'course_subject' => 'required',
            'course_quali' => 'required',
            'image' => 'mimes:jpeg,png|max:8192',
        ]);

        $user->cell = $request->input('cell');
        $user->telephone = $request->input('telephone');

        $user->facelink = $request->input('facelink');
        $user->linlink = $request->input('linlink');

        $user->description = $request->input('description');

        $user->course_name = $request->input('course_name');
        $user->course_subject = $request->input('course_subject');
        $user->course_quali = $request->input('course_quali');

        $user->job_type = $request->input('job_type');
        $user->job_digination = $request->input('job_digination');
        $user->job_work = $request->input('job_work');

        $user->intsub = $request->input('intsub');
        $user->intname = $request->input('intname');

        $user->dipsub = $request->input('dipsub');
        $user->dipname = $request->input('dipname');

        $user->bscdipsub = $request->input('bscdipsub');
        $user->bscdipname = $request->input('bscdipname');

        $user->bscsub = $request->input('bscsub');
        $user->bscname = $request->input('bscname');

        $user->mscsub = $request->input('mscsub');
        $user->mscname = $request->input('mscname');

        $user->mbasub = $request->input('mbasub');
        $user->mbaname = $request->input('mbaname');

        $user->fathername = $request->input('fathername');
        $user->mothername = $request->input('mothername');

        $user->preadd = $request->input('preadd');
        $user->peradd = $request->input('peradd');

        $user->nid = $request->input('nid');
        $user->religion = $request->input('religion');
        $user->blood = $request->input('blood');


       if ($request->hasFile('image'))

        {
            $destination = 'images/user/'.$user->image;
            if (File::exists($destination)){
              File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('images/user/', $filename);
            $user->image = $filename;
        }

        $user->update();
        session()->flash('success', 'User Update Successfully');
        return redirect()->back();

    }
    
}