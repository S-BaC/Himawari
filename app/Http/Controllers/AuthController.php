<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function index(){
        return view('auth.login');
    }

    function validate_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect('/');
        }

        return redirect('login')->with('msg', __('Details not valid.'));
    }

    function register(){
        return view('auth.register');
    }

    function validate_registration(Request $request){
        $request->validate([
            'name'  =>  'required',
            'email' =>  'required|email|unique:users',
            'password' =>  'required|min:10',
            'password_confirmation' => 'required_with:password|same:password'
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect('login')->with('msg', __('Registered Successfully'));

    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
