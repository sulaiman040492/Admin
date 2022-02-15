<?php

namespace App\Http\Controllers\provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobModel as Job;
use App\Models\ApplyJobModel as ApplyJob;
use Auth;

class ProviderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:provider');
    }
    public function index(Request $req)
    {
        $jobs = Job::with('receivers')->with('category')->paginate(2)->toArray();
        $applied_jobs = ApplyJob::where('applicant_id',Auth::guard('provider')->user()->id)
        ->pluck('post_id')->toArray();
        $total_jobs = Job::count();

        if ($req->ajax()) {
            // if(isset($req->search)){
            //     $jobs = Job::with('receivers')->whereHas('receivers',function($client) use ($req){
            //             $client->where('first_name','LIKE','%'.$req->search.'%');
            //     })->paginate(2)->toArray();

            //     $view = view('provider.common.jobs-data',compact('jobs'))->render();
            //     return response()->json(['html'=>$view]);
            // }
            // else{
                $view = view('provider.common.jobs-data',compact('jobs','applied_jobs'))->render();
                return response()->json(['html'=>$view]);
            // }
        }

        return view('provider.dashboard.index',compact('jobs','applied_jobs','total_jobs'));
    }

    public function getReceiver()
    {
        return view('provider.receiver');
    }
    public function getProvider()
    {
        return view('provider.provider');
    }
}
