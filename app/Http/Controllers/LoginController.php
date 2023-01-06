<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
 public function login(){
    return view('login');
 }

 public function loginSubmit(Request $request){
    if(auth()->guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
        return view('dashboard');
    }else{

    }
 }
}
