<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class profile extends Controller
{

    public function get_profile()
    {
        $id = Auth::id();
        $profile = DB::table('users')->where('id',$id)->get()->first();
        return view('profile',['profile'=>$profile]);
    }
    public function edit_profile()
    {
        $id = Auth::id();
        $profile = DB::table('users')->where('id',$id)->get()->first();
        return view('edit_profile',['profile'=>$profile]);
    }
    public function update_profile(Request $request)
    {
        $id = Auth::id();
        DB::table('users')->where('id',$id)->update(['name' =>$request['name'], 'gender' =>$request['gender'] ,'birth'=>$request['birth']]);
        $profile = DB::table('users')->where('id',$id)->get()->first();
        return view('profile',['profile'=>$profile]);
    }
    public function iconUpload(Request $request)  
    {
        $file = Input::file('user_icon_file');
        $extension = $file->getClientOriginalExtension();
        $file_name = strval(time()).str_random(5).'.'.$extension;

        $destination_path = public_path().'/user-upload/';

        if (Input::hasFile('user_icon_file')) {
            $upload_success = $file->move($destination_path, $file_name);
            echo "img upload success!";
        } else {
            echo "img upload failed!";
        }
        $id = Auth::id();
        DB::table('users')->where('id',$id)->update(['user_icon' =>$file_name]);
        $profile = DB::table('users')->where('id',$id)->get()->first();
        return view('profile',['profile'=>$profile]);
    }
}
