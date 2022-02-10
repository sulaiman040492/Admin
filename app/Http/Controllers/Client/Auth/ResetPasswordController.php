<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;
    protected $redirectTo = 'client/dashboard';

    public function showResetForm(Request $request, $token = null)
    {
        return view('client.auth.new-password')->with(
            ['token' => $token, 'email' => $request->email, 'form_msg' => 'Please Enter Your New Password.']
        );
    }

    public function __construct()
    {
        // Dd(123);
        $this->redirectTo = '/client/dashboard';
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
