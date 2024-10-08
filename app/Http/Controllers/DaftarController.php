<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function daftar(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'phone_number' => 'required|string|max:15'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = "mitra";
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successful! Please login');
        return redirect('/');
    }
}
