<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    

     use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin() {
        return view('admin.pages.login');
    }

    public function login(Request $request) {
        if (!Auth::attempt( $request->only( ['email','password'] ) )) {
            return redirect()->back()->with('info',"Error Occured");
        }else {
            return redirect()
                ->route('admin.home')
                ->with('info', 'You are now succesfully signed in!!!');
        } 
    }

    public function logout() {
        Auth::logout();
        return redirect()
                ->route('admin.login')
                ->with('info', 'You are sucessfully signed out!!');
    }
}
