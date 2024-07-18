<?php

namespace App\Http\Controllers\Member\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('member.auth.login');
    }
    
    public function login(Request $requests) {
        $requests->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $requests->only('email', 'password');

        // Cari user berdasarkan email
        $user = User::where('email', $requests->email)->first();
        if(!$user) {
            return back()->withErrors([
                'email' => 'Email Yang Anda Masukan Salah',
            ])->onlyInput('email');
        }

        if(Auth::attempt($credentials)) {
            $requests->session()->regenerate();
            return redirect()->route('member.course');
        }
        
        return back()->withErrors([
            'password' => 'Password Yang Anda Masukan Salah'
        ])->onlyInput( 'password');
    }
    
    public function logout(Request $requests) {
        Auth::logout();
        
        $requests->session()->invalidate();
        $requests->session()->regenerateToken();
        
        return redirect()->route('member.course');
    }

    
}