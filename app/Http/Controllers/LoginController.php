<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('Dashboard.Login.login', [
            'active' => 'Login'
        ]);
    }

    public function authenticate(Request $request) {
        dd($request);
        //   $credentials = $request->validate([
        //      'username' => 'required',
        //      'email' => 'required|email',
        //      'password' => 'rquired'
        //   ]);

        //   if(Auth::attempt($credentials)) {
        //      $request->session()->regenerate();
        //      return redirect()->intended('/pageadmin')->with('success', 'Berhasil login!!');
        //   }
        //   return back()->with('failed', 'Username/Password salah!');
    }
}
