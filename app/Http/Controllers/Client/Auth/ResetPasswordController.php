<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
     */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = 'client/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showResetForm(Request $request, $token = null)
    {
        return view('client.auth.reset')->with(
            ['token' => $token, 'email' => $request->email, 'form_msg' => 'Please Enter Your New Password.']
        );
    }

    public function __construct()
    {
        $this->redirectTo = \Request::segment(1) . '/client/dashboard';
        $this->middleware('guest:client');
    }

    protected function guard()
    {
        return Auth::guard('client');
    }
    public function broker()
    {
        return Password::broker('clients');
    }
}
