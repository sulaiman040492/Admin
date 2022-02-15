<?php

namespace App\Http\Controllers\Provider\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('provider.auth.password-reset');
    }

    public function __construct()
    {
        $this->middleware('guest:provider');
    }

    public function broker()
    {
        return Password::broker('providers');
    }

    protected function guard()
    {
        return Auth::guard('provider');
    }
}
