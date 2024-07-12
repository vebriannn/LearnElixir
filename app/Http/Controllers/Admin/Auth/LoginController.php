<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $requests) {

        $requests->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $requests->only('email', 'password');
        
        if(Auth::attempt($credentials)) {
            if(Auth::user()->role != 'member') {
                return response()->json(['message' => 'success login']);
            }
            else {
                return response()->json(['message' => 'gagal login']);
            }
        }

        // return redirect()->route();
    }


    public function logout(Request $requests) {
        Auth::logout();
        
        $requests->session()->invalidate();
        $requests->session()->regenerateToken();

    }
}