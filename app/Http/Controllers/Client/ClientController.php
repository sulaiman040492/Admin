<?php

namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Models\JobModel as Job;
use App\Http\Controllers\Controller;

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
    public function index(Request $req)
    {
        $jobs = Job::with('clients')->paginate(2)->toArray();

        if ($req->ajax()) {
            if(isset($req->search)){
                $jobs = Job::with('clients')->whereHas('clients',function($client) use ($req){
                        $client->where('first_name','LIKE','%'.$req->search.'%');
                })->paginate(2)->toArray();

                $view = view('client.common.jobs-data',compact('jobs'))->render();
                return response()->json(['html'=>$view]);
            }
            else{
                $view = view('client.common.jobs-data',compact('jobs'))->render();
                return response()->json(['html'=>$view]);
            }
        }

        return view('client.dashboard.index',compact('jobs'));
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
