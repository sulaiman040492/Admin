<?php

namespace App\Http\Controllers\Receiver\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('receiver.auth.password-reset');
    }

    public function __construct()
    {
        $this->middleware('guest:receiver');
    }

    public function broker()
    {
        return Password::broker('receivers');
    }

    protected function guard()
    {
        return Auth::guard('receiver');
    }
}
