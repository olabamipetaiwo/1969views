<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{
    // use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getRegister() {
        return view('admin.pages.register');
    }

    public function register(Request $request) {
        $this->validate($request, [
            'name' =>  'required|max:255',
    		'email' => 'required|unique:users|email|max:255',
            'password' => 'required|confirmed|max:16'
        ]);

        $user = User::create([
    		'email'=>$request->input('email'),
    		'name'=>$request->input('name'),
    		'password'=>bcrypt($request->input('password')),
        ]);

        return redirect()
                ->route('admin.login')
                ->with('info', 'You are sucessfully registered');
    }

}
