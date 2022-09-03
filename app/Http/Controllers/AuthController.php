<?php

namespace App\Http\Controllers;

use App\Mail\TemplateNew;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    private static $UUID; // A New instance is created, so? A file?
    private static $DATA;

    function __construct()
    {
        if(!isset(self::$UUID)){
            self::$UUID = fake()->uuid();
        }
    }

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

        self::$DATA = $request->all();

        Mail::to(self::$DATA['email'])->send(new TemplateNew(self::$UUID));

        return redirect('registration_confirmation');
    }

    function validate_registration_code(Request $request){
        dd(($request->all())['code'], self::$UUID);
        if(($request->all())['code'] === self::$UUID){
            User::create([
                'name' => self::$DATA['name'],
                'email' => $this->self::$DATA['email'],
                'password' => Hash::make($this->self::$DATA['password']),
            ]);
            return redirect('login')->with('msg', __('Registered Successfully'));
        }

        return redirect('registration_confirmation')->with('msg', __('Incorrect Code. Please Enter Again.'));

    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
