<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function getLogin(){
        return view("auth.login");
    }

    public function postLogin(Request $request){
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect(Auth::user()->is_admin ? '/admin/product' : '/product/all');
        }
        
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    
    public function getRegister(){
        return view("auth.register");
    }

    public function postRegister(Request $request){
        DB::table('users')->insert([
            'name' => $request->input('fullName'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'is_admin' => 0
        ]);

        return redirect('/login');
    }
}
