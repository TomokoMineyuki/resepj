<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class AuthenticationController extends Controller
{
    public function showRegister() {
        return view('register');
    }

    public function register(RegisterRequest $request) {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('thanks');
    }

    public function thanks () {
        return view('thanks');
    }

    public function showLogin() {
        return view('login');
    }

    public function login(LoginRequest $request) {
        
        /*$request->authenticate();
        $request->session()->regenerate();*/

        $email = $request->email;
        $password = $request->password;
        Auth::attempt(['email' => $email, 'password' => $password]);
        
        return redirect('/');

    }

    public function logout(Request $request) {
        Auth::logout();

        /*$request->session()->invalidate();
        $request->session()->regenerateToken();*/

        return redirect('/');
    }
}
