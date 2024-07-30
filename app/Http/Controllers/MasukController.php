<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function index()
    {
        return view('masuk', [
            'title' => 'Masuk',
        ]);
    }
    public function masuk(Request $request)
    {
        $validation = $request->validate([
            'user' => 'required',
            'pass' => 'required'
        ]);
        $credentials = ([
            'username' => $validation['user'],
            'password' => $validation['pass']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back();
    }

    public function keluar()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
