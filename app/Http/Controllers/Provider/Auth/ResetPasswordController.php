<?php

namespace App\Http\Controllers\Provider\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;
    protected $redirectTo = 'provider/dashboard';

    public function showResetForm(Request $request, $token = null)
    {
        return view('provider.auth.new-password')->with(
            ['token' => $token, 'email' => $request->email, 'form_msg' => 'Please Enter Your New Password.']
        );
    }

    public function __construct()
    {
        // Dd(123);
        $this->redirectTo = '/provider/dashboard';
        $this->middleware('guest:provider');
    }

    protected function guard()
    {
        return Auth::guard('provider');
    }
    public function broker()
    {
        return Password::broker('providers');
    }
}
