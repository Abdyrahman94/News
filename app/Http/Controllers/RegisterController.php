<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'alpha', "min:3", "max:25"],
            'surname' => ['nullable', 'string', 'alpha', "min:3", "max:25"],
            'username' => ['required', 'string', "alpha_num", "min:3", "max:25", Rule::unique('users')],
            'password' => ['required', 'string', "min:8", "confirmed"],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname ?? null,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return to_route('post.index')->with([
            'success' => "Siz üstünlikli hasaba alyndyňyz"
        ]);
    }
}
