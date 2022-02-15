<?php

namespace App\Http\Controllers\Provider\Auth;

use App\Http\Controllers\Controller;
use App\Models\ProviderModel as Provider;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'provider/dashboard';
    public function __construct(Request $request)
    {
        $this->middleware('guest:provider')->except('logout');
        $this->redirectTo = '/provider/dashboard';
    }

    public function showLoginForm()
    {
        // dd(123);
        return view('provider.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('provider');
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
        if (Auth::guard('provider')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()
                ->route('provider.dashboard')
                ->with('status', 'You are Logged in as provider!');
        }
        return redirect()->back()
            ->withInput($request->all())
            ->with('error', 'Wrong Credentials!');
    }

    public function logout(Request $request)
    {
        $this->guard('provider')->logout();

        // $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/provider/dashboard');
    }
}
