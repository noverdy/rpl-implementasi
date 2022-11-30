<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated_data = $request->validate([
            'nama' => ['required'],
            'nim' => ['required', 'size:15'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed']
        ]);
        $validated_data['password'] = Hash::make($validated_data['password']);
        User::create($validated_data);
        return redirect()->route('login.index')->with(['success' => 'Berhasil mendaftar. Silakan melakukan login.']);
    }
}
