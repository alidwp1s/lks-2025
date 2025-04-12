<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($request->username === 'user' && $request->password === 'password') {

            session(['user' => $request->username]);

            return redirect()->route('user.dashboard');
        }
        return back()->withErrors(['Invalid username or password']);
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }
}
