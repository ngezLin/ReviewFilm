<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)){
            $user = Auth::user();

            return match($user->role){
                'admin' => redirect('/admin'),
                'reviewer' => redirect('/reviewer'),
                default => redirect('/guest'),
            };
        }

        return back()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:admin,reviewer',
        ]);

        // Debug: Check if the role is correctly retrieved from the form
        // dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        // dd($user);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }



    public function logout(){
        Auth::logout();
        return redirect('/guest');
    }
}
