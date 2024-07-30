<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    /**
     * Submits the login form and attempts to authenticate the user.
     *
     * @param Request $request The HTTP request containing the user's credentials.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View The response after authentication is attempted.
     */
    public function submitLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->with('message', 'Invalid credentials. Please try again.');
    }

    /**
     * Show the registration form if the user is not authenticated.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function showRegisterForm()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.register');
    }

    /**
     * Submit the registration form and create a new user.
     *
     * @param Request $request The HTTP request containing the user's registration information.
     *
     * @return \Illuminate\Http\RedirectResponse Redirects the user to the login page with a success message.
     */
    public function submitRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'User created successfully. Please log in.');
    }

    /**
     * Display the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Logs out the authenticated user and redirects them to the login page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
