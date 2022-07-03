<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UserCreateRequest;

class UserController extends Controller
{
    /**
     * Store the user.
     *
     * @param  UserCreateRequest  $request
     *
     * @return RedirectResponse
     */
    public function store(UserCreateRequest $request): RedirectResponse
    {
        // Create the user using the validated
        // data. The password is encrypted
        // using the setter in model.
        $user = User::create($request->validated());

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    /**
     * Show the register form.
     *
     * @return View
     */
    public function create(): View
    {
        return view('users.register');
    }

    /**
     * Show the login form.
     *
     * @return View
     */
    public function login(): View
    {
        return view('users.login');
    }

    /**
     * Logout the user
     *
     * @param  Request  $request
     *
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }


    /**
     * Try and authenticate the user
     *
     * @param  Request  $request
     *
     * @return RedirectResponse
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $formFields = $request->validate([
            'email'    => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
