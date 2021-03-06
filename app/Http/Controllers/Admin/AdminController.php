<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        // dd(123);
        return view('admin.dashboard');
    }

    public function getReceiver()
    {
        return view('admin.receiver');
    }
    public function getProvider()
    {
        return view('admin.provider');
    }
}
