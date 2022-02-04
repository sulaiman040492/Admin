<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminModel as Admin;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'admin/dashboard';
    public function __construct(Request $request)
    {
        $this->middleware('guest:admin')->except('logout');
        $this->redirectTo = '/admin/dashboard';
    }

    public function showLoginForm()
    {
        // dd(123);
        return view('admin.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
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
        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()
                ->route('admin.dashboard')
                ->with('status', 'You are Logged in as Admin!');
        }
        return redirect()->back()
            ->withInput($request->all())
            ->with('error', 'Wrong Credentials!');
    }

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();

        // $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/admin/dashboard');
    }
}
