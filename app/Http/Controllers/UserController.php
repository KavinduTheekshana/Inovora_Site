<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use DB;
use App\users;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function addUser(Request $request){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
          'password' => ['required', 'string', 'min:6', 'confirmed'],
         ]);
  
         $users = new users();
         $users->name = $request->input('name');
         $users->email = $request->input('email');
         $users->password = Hash::make($request['password']);
              if(Input::hasFile('profile_pic')){
                  $file=Input::file('profile_pic');
                  $file->move(public_path().'/uploads/',
                  $file->getClientOriginalName());
                  $url=URL::to("/").'/uploads/'.$file->getClientOriginalName();
                  $users->profile_pic = $url;
              }else {
                $users->profile_pic = '/uploads/default.jpg';
              }
         $users->save();
         return redirect('addUser')->with('status', 'Profile Added Sucessfully');
      }
}
