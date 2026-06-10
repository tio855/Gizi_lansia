<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{

    public function showLogin(){
        return view('login');
    }

    public function showRegister(){
        return view('register');
    }

    public function login(Request $request)
    {
        $data = $request->only('email','password');

        if(Auth::attempt($data)){

            if(Auth::user()->role == 'admin'){
                return redirect('/dashboard');
            }

            return redirect('/dashboard');
        }

        return back()
                ->with('error','Email atau password salah')
                ->withInput();
    }

    public function register(Request $request){

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>'user'
        ]);

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
