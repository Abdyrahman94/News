<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with([
                'success','Üstünlikli giriş!'
            ]);
        }

        return back()->withErrors([
            'username' => 'ullanyjy ýa-da parol ýalňyş!',
        ])->onlyInput('username');
    }


    //👉 LOGOUT (ÇYKYS) PROSESINI ÝERINE ÝETIR

    public function destroy(Request $request)
    {
        // 1. GIRIŞI ÝATDAN ÇYKAR
        Auth::guard('web')->logout();

        // 2. SESSION-Y POZ
        $request->session()->invalidate();

        // 3. TÄZE TOKEN DÖRET
        $request->session()->regenerateToken();

        // 4. BAŞ SAHYPA UGRAT
        return redirect()->route('home')->with([
            'success' => 'Üstünlikli çykys edildi!'
        ]);
    }
}
