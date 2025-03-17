<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function getLogin(){
        return view("auth.login");
    }

    public function postLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        $user = DB::table('users')->where('email', $email)->first();
    
        if (!$user || !Hash::check($password, $user->password)) {
            return back()->withErrors([
                'email' => 'The provided credentials are incorrect.',
            ]);
        }
    
        Auth::loginUsingId($user->id_user);
    
        if ($user->is_admin) {
            return redirect('/admin/product');
        } else {
            return redirect('/product/all');
        }
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
