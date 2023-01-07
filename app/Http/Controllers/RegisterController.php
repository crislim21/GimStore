<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request) {
        // dd($request->input());
        // $data = $request->input();

        $validatedData = $request->validate([
            'username' => ['required', 'min:5', 'max:20', 'unique:users'],
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|min:10|max:13',
            'password' => 'required|min:5|max:20',
        ]);
        // dd($validatedData);


        // $validatedData['password'] = bcrypt(($validatedData['password']));
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        // session()->flash('success', 'Registrasi Berhasil!');
        return redirect('/login')->with('success', 'Registrasi Berhasil!');
    }
}
