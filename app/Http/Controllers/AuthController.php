<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        $pass = 123456;
        $hash = Hash::make($pass);
        return view('modules.customer.login',compact('hash'));
    }

    public  function login(Request $request)
    {
        $credentials = $request->only('username','password');
       if(Auth::attempt($credentials)){
           return redirect()->route('customer.index');
       }
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
    }



}
