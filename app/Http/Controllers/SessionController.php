<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class SessionController extends Controller
{
    function index(){
        return view('session.index');
    }

    function login(Request $request){
        FacadesSession::flash('email', $request->email);
        $request->validate([
            'email' =>'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);

        $logininfo = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(auth()->attempt($logininfo)){
            return redirect('/posts')->with('success', 'Login Success');
        }else{
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/session')->with('success', 'You Have Been Logged Out!');
    }

    function register(){
        return view('/session/register');
    }

    function create(Request $request){
        FacadesSession::flash('name', $request->name);
        FacadesSession::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email' =>'required | email | unique:users',
            'password' => 'required | min:6'
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email is already in use',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
        ];
        User::create($data);

        return redirect('/session')->with('success', 'Account successfully registered, please log in');
    }
}
