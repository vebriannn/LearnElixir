<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function index() {
        return view('admin.auth.login');
    }
    
    public function login(Request $requests) {

        $requests->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $user = User::where('email', $requests->email)->first();
        if(!$user) {
            return back()->withErrors([
                'email' => 'Email Yang Anda Masukan Tidak Ada!',
            ])->onlyInput('email');
        }
        
        $credentials = $requests->only('email', 'password');
        if(Auth::attempt($credentials)) {
            if(Auth::user()->role != 'member') {
                $requests->session()->regenerate();
                return redirect()->route('admin.dashboard');
            }
            else {
                return response()->json(['message' => 'Maaf Anda Bukan Mentor Dan Superadmin, Anda Di Larang Login!!!']);
            }
        }

        return back()->withErrors([
            'password' => 'Password Yang Anda Masukan Salah'
        ])->onlyInput( 'password');

        // return redirect()->route();
    }


    public function logout(Request $requests) {
        Auth::logout();
        
        $requests->session()->invalidate();
        $requests->session()->regenerateToken();

    }
}