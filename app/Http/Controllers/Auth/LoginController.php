<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the login credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            // Redirect to the products page on successful login
            return redirect()->route('products.index');
        }

        // Redirect back with an error message on failure
        return back()->with('error', 'Invalid email or password.');
    }
}