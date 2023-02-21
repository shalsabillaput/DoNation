<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function indexvalidasi(){
        return view('validasi');
    }

    public function validasi(Request $request){
        // dd("erga cantik");
        $rules = [
            "username" => 'required|min:5|max:255|unique:users',
            "password" => 'required|min:5|max:25'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect('/');
    }

    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            "username" => 'required',
            "password" => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');

        }

        return back()->with('loginError', 'Silahkan coba lagi untuk masuk ke sistem');
    }

    public function register()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => 'required|max:255',
            "email" => 'required|email|unique:users',
            "username" => 'min:5|max:255|unique:users',
            "password" => 'min:5|max:25|confirmed'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['email_verified_at'] = date("Y-m-d H:i:s");

        User::create($validatedData);
        return redirect('/login')->with('success', "Pendaftaran akun berhasil, Silahkan masuk");
    }
}
