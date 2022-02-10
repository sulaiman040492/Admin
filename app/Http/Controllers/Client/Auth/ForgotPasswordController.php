<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('client.auth.password-reset');
    }

    public function __construct()
    {
        $this->middleware('guest:client');
    }

    public function broker()
    {
        return Password::broker('clients');
    }

    protected function guard()
    {
        return Auth::guard('client');
    }
}
