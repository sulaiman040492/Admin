<?php

namespace App\Http\Controllers\receiver;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ReceiverModel as Receiver;
use App\Models\ProviderModel as Provider;
use Auth;
use Validator;
use Str;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth:receiver'); //If user is not logged in then he can't access this page
    }
    
    public function profile(){

        $data = Receiver::find(Auth::guard('receiver')->user()->id)->toArray();
        return view('receiver.profile.profile',compact('data'));
    }

    public function profileEdit(){
        $data = Receiver::find(Auth::guard('receiver')->user()->id)->toArray();
        // dd($data);
        return view('receiver.profile.profile-edit',compact('data'));
    }

    public function profileUpdate(Request $req){
        $validator = Validator::make($req->all(), [
            'id' => 'required|numeric',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'date_of_birth' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($req->all())
                ->withErrors($validator);
        }

        $client = Receiver::findOrFail($req->id);
        $client->first_name = $req->fname;
        $client->last_name = $req->lname;
        $client->email = $req->email;
        $client->phone_no = $req->phone;
        $client->address = $req->address;
        $client->date_of_birth = $req->date_of_birth;
        $client->postal = $req->postal;
        $client->city = $req->city;
        $client->country = $req->country;
        $client->degree = $req->degree_title;
        $client->institute = $req->institute_name;
        $client->education_from = $req->from_date_ed_new;
        $client->education_to = $req->to_date_ed_new;
        $client->job_title = $req->job_title;
        $client->company = $req->company_name;
        $client->experience = $req->experience;
        $client->experience_from = $req->from_date_ex_new;
        $client->experience_to = $req->to_date_ex_new;
        $client->availability = $req->availability;
        $client->description = $req->description;
        $client->hourly_rate = $req->hourly_rate;
        


        if($req->hasFile('avatar')) {
            $validator = Validator::make($req->all(), [
                'avatar' => 'required|image|mimes:jpeg,png,jpg',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput($req->all())
                    ->withErrors($validator);
            }

            $fileName = Str::random(10).'_'.$req->avatar->getClientOriginalName();
            $req->avatar->move('client/images/avatars/',$fileName);
            $client->image = $fileName;
        }

        $client->save();
        $req->session()->flash('status', 'Profile has been Updated successfully');
        return redirect()->back();

    }

    public function passwordChange(){
        return view('receiver.profile.profile-password-change');
    }

    public function passwordChangeProcess(Request $req){
        $validator = Validator::make($req->all(), [
            'old-password' => ['required',new MatchOldPassword],
            'password' => 'required|confirmed|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($req->all())
                ->withErrors($validator);
        }

        $client = Receiver::findOrFail(Auth::guard('receiver')->user()->id);
        $client->password = Hash::make($req->password);
        $client->save();
        $req->session()->flash('status', 'Password has been Updated successfully');
        return redirect()->back();

    
    }

    public function profileMembership(){
        return view('receiver.profile-membership');
    }


    public function other_profile($slug){
        $data = Provider::where('slug',$slug)->get()->toArray();
        return view('receiver.profile.other-profile',compact('data'));
    }


}
