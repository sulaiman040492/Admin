<?php

namespace App\Http\Controllers\Receiver\Auth;

use App\Http\Controllers\Controller;
use App\Models\ReceiverModel as Receiver;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'receiver/dashboard';
    public function __construct(Request $request)
    {
        $this->middleware('guest:receiver')->except('logout');
        $this->redirectTo = '/receiver/dashboard';
    }

    public function showLoginForm()
    {
        // dd(123);
        return view('receiver.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('receiver');
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
        if (Auth::guard('receiver')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()
                ->route('receiver.dashboard')
                ->with('status', 'You are Logged in as receiver!');
        }
        return redirect()->back()
            ->withInput($request->all())
            ->with('error', 'Wrong Credentials!');
    }

    public function logout(Request $request)
    {
        $this->guard('receiver')->logout();

        // $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/receiver/dashboard');
    }
}
