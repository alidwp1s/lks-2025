<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Administrator;

class AdministratorController extends Controller
{
  public function login(Request $request)
  {
    $request->validate([
      'username' => 'required',
      'password' => 'required',
    ]);

    $admin = Administrator::where('username', $request->username)->first();

    if ($admin && Hash::check($request->password, $admin->password)) {
      Auth::login($admin);

      return redirect()->route('admin.dashboard');
    }

    return back()->withErrors(['Invalid username or password']);
  }

  public function dashboard()
  {
    return view('dashboard_admin');
  }
}
