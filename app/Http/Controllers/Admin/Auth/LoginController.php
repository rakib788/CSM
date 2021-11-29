<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('admin.auth.showlogin');
    }
    public function loginProccess(Request $request){
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }else {
            return redirect()->back()->with('error','Invalid Credential');
        }
    }
    public function logout(){
        \auth()->logout();
        return redirect()->route('login');
    }
    public function userProfile(){
        return view('admin.auth.viewProfile');
    }
}
