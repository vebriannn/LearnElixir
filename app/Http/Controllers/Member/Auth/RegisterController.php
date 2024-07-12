<?php

namespace App\Http\Controllers\Member\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $requests) {

        $data = $requests->except('_token', '_method');
        
        $requests->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:7'
        ]);

        $data['avatar'] = "user.png";

        if($requests->avatar) {
            $avatars = $requests->avatar;
            $avatarGetName = Str::random(10).$avatars->getClientOriginalName();
            $avatars->storeAs('public/avatar', $avatarGetName);

            $data['avatar'] = $avatarGetName;
        };

        User::create([
            'avatar' => $data['avatar'],
            'name' => $requests->name,
            'role' => 'member',
            'divisi' => 'none',
            'email' => $requests->email,
            'password' => Hash::make($requests->password),
        ]);

        // return redirect()->route();
    }
}