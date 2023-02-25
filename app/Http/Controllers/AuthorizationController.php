<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthorizationController extends Controller {
    public function login(Request $request) {
        $request->validate([
            'phone_number' => 'required|size:11',
            'password' => 'required|min:6|max:64',
        ]);

        if (!Auth::attempt($request->only('phone_number', 'password'))) {
            return back()->withErrors([
                'password' => 'Вы указали неверный номер телефона или пароль',
            ])->onlyInput('password');
        }

        $request->session()->regenerate();

        return redirect('/');
    }

    public function register(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'phone_number' => 'required|size:11',
            'password' => 'required|min:6|max:64',
        ]);

        $user = User::create([
            'name' => 'Новый пользователь',
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}