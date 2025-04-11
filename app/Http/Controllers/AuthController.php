<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Administrator;

class AuthController extends Controller
{
    public function loginUser(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Login user gagal'], 401);
        }

        $user->update(['last_login_at' => now()]);

        $token = $user->createToken('user-token')->plainTextToken;

        return response()->json(['token' => $token, 'user' => $user]);
    }

    public function loginAdmin(Request $request)
    {
        $admin = Administrator::where('username', $request->username)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return response()->json(['message' => 'Login admin gagal'], 401);
        }

        $admin->update(['last_login_at' => now()]);

        $token = $admin->createToken('admin-token')->plainTextToken;

        return response()->json(['token' => $token, 'admin' => $admin]);
    }
}
