<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    public function showRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            // 'password' => 'required|min:6|confirmed',
        ]);

        \Log::info('oussama');
        // ⚠ هنا حددي role_id  
        // admin = 1  /  formateur = 2  (مثال فقط)
        $roleId = 2; // خليتو Formateur افتراضياً

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role_id'  => $roleId,
        ]);
        Auth::login($user);

        if ($user->role->name === 'admin') {
            return redirect('/admin/dashboard');
        }

        return redirect('/formateur/dashboard');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('error', 'Email ou mot de passe incorrect');
        }

        $user = Auth::user();

        if ($user->role->name === 'admin') {
            return redirect('/admin/dashboard');
        }

        return redirect('/formateur/dashboard');
}


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
