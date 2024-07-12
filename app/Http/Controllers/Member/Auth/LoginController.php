<?php

namespace App\Http\Controllers\Member\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        
    }
    
    public function login(Request $requests) {
        $requests->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $requests->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $requests->session()->regenerate();
            return redirect()->route('member.course');
        }
        
        // return redirect()->route('');
    }
    
    public function logout(Request $requests) {
        Auth::logout();
        
        $requests->session()->invalidate();
        $requests->session()->regenerateToken();
        
        return redirect()->route('member.course');
    }

    
}