<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.index', [
            "title" => "Masuk"
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        
        return back()->with('gagal', 'Login Gagal');
        
        dd("Berhasil Login");
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

    public function redirect()
    {
        
        {
            return redirect('/');
        }

    
    }
}