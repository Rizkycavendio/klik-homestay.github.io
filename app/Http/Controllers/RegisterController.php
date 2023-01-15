<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            'title' => 'Register'
        ]);
    }

    // menerima data dari form REGISTER
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // untuk mengamankan password
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // untuk membuat user baru
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration succsessfull! Please Login');
        return redirect('/login')->with('success', 'Registration succsessfull! Please Login');
    }
}
