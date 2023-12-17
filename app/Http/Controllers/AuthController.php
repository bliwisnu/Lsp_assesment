<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view("register");
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->role_user = 0;

        $user->save();

        return redirect()->back()->with('success', 'Register Successfully');
    }
    public function login(Request $request)
    {
        return view("login");
    }

    public function loginPost(Request $request)
    {
        $sigin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($sigin)) {
            return redirect('/profile')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'Email atau password salah');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }

    function delete($id)
     {
        Profile::find($id)->delete();
        return back()->with('error', 'berhasil hapsu');
    }
}
