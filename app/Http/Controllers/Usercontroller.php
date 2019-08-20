<?php

namespace demo\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use demo\User;
use Image;
use Illuminate\Support\Facades\DB;
class Usercontroller extends Controller
{
    public function profile(){

        return view('profile',array('user'=>Auth::user()));
    }

    public function update_profile(Request $request){
        //handle user upload of profile photo
        
        if($request->hasFile('profile_photo')){
            $profilephoto=$request->file('profile_photo');
            $filename=time().'.'.$profilephoto->getClientOriginalExtension();
            Image::make($profilephoto)->resize(300,300)->save(public_path('/uploads/profile_photos/'.$filename));

            $user=Auth::user();
            $user->profile_photo=$filename;
            
            $user->save();

        }
        return view('profile',array('user'=>Auth::user()));
    } 
   
   
}
