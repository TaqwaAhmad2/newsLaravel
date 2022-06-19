<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){

        return view('Auth.login');
    }

    public function auth(Request $request){
//        dd($request->toArray());
        $login_data=['email'=>$request->email, 'password'=>$request->password];
        if (Auth::attempt($login_data)){

        return redirect()->route('admin.admin');
        }
       return  redirect()->back()->with('error','invalid username or password');

    }
    public function register(){

        return view('auth.register');
    }
    public function do_register(Request $request){

        $request->validate([
            'name'=>"required",
            'email'=>"required|email",
            'password'=>"required|confirmed"


        ]);

        User::create(['name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)]);

        return redirect()->route('login')->with('success','User Account successfully created');

    }












    public function logout(){

        if (Auth::check()){
            Auth::logout();

        }
        return redirect()->route('frontsite.home');
    }
}
