<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function create()
    {
        return view('auth.sign-up');
    }

    public function store(Request $request)
    {
        $userDetails = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'confirmed', 'min:4'],
        ]);

        $user = User::create($userDetails);

        Auth::login($user);

        return redirect('/');
    }
}
