<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class UpdateProfileController extends Controller
{
    public function index() {
        return view('profile.index');
    }

    public function editprofile() {
        return view('profile.update-profile');
    }

    public function editpassword() {
        return view('profile.update-password');
    }

    public function updateprofile(Request $request) {
        // dd($request);
        $validatedData = $request->validate([
            'username' => ['required', 'min:5', 'max:20', 'unique:users,username,' . auth()->id()],
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phonenumber' => 'required|min:10|max:13',
        ]);

        auth()->user()->update($validatedData);

        return redirect('/profile')->with('success', 'Profile Berhasil Diupdate!');
    }

    public function updatepassword(Request $request) {
        // dd($request);
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:5|max:20|confirmed',
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return redirect('profile')->with('success', 'Your password has been changed');
        }
        throw ValidationException::withMessages([
            'current_password' => 'Your current password does not match with our record'
        ]);
    }
}
