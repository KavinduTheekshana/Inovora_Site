<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function login(){
        $title='Admin Login';
        return view('admin.lockscreen',['title'=>$title]);
      }

      public function adminlogin(Request $request){
        $this->validate($request, [
          'password' => ['max:15','required']
         ]);
          $password =Hash::make($request->input('password'));

         $user=DB::table('users')->where('email','kavindutheekshana@gmail.com')->orWhere('password', $password)->first();
         if($user!=null){
          return view('admin.index');
         }else{
          return redirect()->back(); 
         }
      }
    
}
