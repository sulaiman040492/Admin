<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:client');
    }
    public function index()
    {
        // dd(123);
        return view('client.dashboard');
    }

    public function getReceiver()
    {
        return view('client.receiver');
    }
    public function getProvider()
    {
        return view('client.provider');
    }
}
