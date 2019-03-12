<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(){
        $title='Admin Login';
        return view('admin.lockscreen',['title'=>$title]);
      }
    
}
