<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminModel as Admin;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'client/dashboard';
    public function __construct(Request $request)
    {
        $this->middleware('guest:client')->except('logout');
        $this->redirectTo = '/client/dashboard';
    }

    public function showLoginForm()
    {
        // dd(123);
        return view('client.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('client');
    }

    protected function attemptLogin(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }

        if (Auth::guard('client')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()
                ->route('client.dashboard')
                ->with('status', 'You are Logged in as client!');
        }
        return redirect()->back()
            ->withInput($request->all())
            ->with('error', 'Wrong Credentials!');
    }

    public function logout(Request $request)
    {
        $this->guard('client')->logout();

        // $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/client/dashboard');
    }
}
