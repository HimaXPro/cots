<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // CASE 1: admin
        if ($username === 'admin' && $password === 'admin123') {
            session([
                'user' => [
                    'username' => 'admin',
                    'role' => 'admin'
                ]
            ]);

            return redirect('/admin')->with('success', 'Welcome Admin!');
        }

        // CASE 2: user biasa
        if ($username === 'user' && $password === 'user123') {
            session([
                'user' => [
                    'username' => 'user',
                    'role' => 'user'
                ]
            ]);

            return redirect('/products')->with('success', 'Login sebagai user.');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
