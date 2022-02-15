<?php

namespace App\Http\Controllers\Receiver\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;
    protected $redirectTo = 'receiver/dashboard';

    public function showResetForm(Request $request, $token = null)
    {
        return view('receiver.auth.new-password')->with(
            ['token' => $token, 'email' => $request->email, 'form_msg' => 'Please Enter Your New Password.']
        );
    }

    public function __construct()
    {
        // Dd(123);
        $this->redirectTo = '/receiver/dashboard';
        $this->middleware('guest:receiver');
    }

    protected function guard()
    {
        return Auth::guard('receiver');
    }
    public function broker()
    {
        return Password::broker('receivers');
    }
}
