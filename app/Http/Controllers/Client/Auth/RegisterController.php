<?php

namespace App\Http\Controllers\Client\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
// use App\Model\SpecilitizationModel as Specilitization;
use App\Models\ClientModel as Client;
// use App\Model\BrandModel as Brand;
// use App\Events\DoctorVerification;
use Auth;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/client/dashboard';

    public function __construct()
    {
        $this->middleware('guest:client');
    }

    protected function guard()
    {
        return Auth::guard('client');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'numeric'],
            'date_of_birth' => ['required', 'date'],
            'address' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'password' => ['required', 'string', 'between:8,255', 'confirmed'],
            'service_id' => ['required','numeric'],
            'agreement' => ['accepted'],
            // 'specilitization' => ['required', 'array'],
        ]);

        // $this->create($data);
    }

    protected function create(array $data)
    {
        return Client::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'], 
            'phone_no' => $data['phone_no'],
            'date_of_birth' => $data['date_of_birth'],
            'address' => $data['address'],
            'email' => $data['email'],
            'agreement' => $data['agreement'],
            'service_id' => $data['service_id'],
            'password' => Hash::make($data['password']),
            'hash' => \Str::random(40),
            // 'specilitization_id' => implode(',',$data['specilitization']),
        ]);

            if(Auth::guard('client')->attempt($data->only('email','password'))){
                return redirect()
                    ->intended(route('client.dashboard'))
                    ->with('status','You are Logged in as Client!');
            } 
            // dd($data);
    }


    public function showRegistrationForm()
    {
        // $specilitization = Specilitization::all()->toArray();
        // dd($Specilitization);
        // compact('specilitization')
        return view('client.auth.sign-up')->with('form_msg', 'Please register and wait for approval call');
    }


}
