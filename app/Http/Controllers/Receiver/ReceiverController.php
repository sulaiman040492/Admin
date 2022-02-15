<?php

namespace App\Http\Controllers\Receiver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobModel as Job;
use App\Models\ProviderModel as Provider;
use App\Models\ApplyJobModel as ApplyJob;
use Auth;
use DB;


class ReceiverController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:receiver');
    }
    public function index(Request $req)
    {
        $service = Auth::guard('receiver')->user()->service_id;
        $profiles = Provider::with('ratings')->where('service_id',$service)
        // ->leftJoin('profile_rating','profile_rating.profile_id','=','providers.id')
        // ->select('providers.*',DB::raw('avg(profile_rating.rating) as avg'))
        ->paginate(2)->toArray();
        $hired_profiles = ApplyJob::where('user_id',Auth::guard('receiver')->user()->id)
        ->pluck('applicant_id')->toArray();

        // ->select('providers.*',DB::raw('count(profile_rating.rating) as total_rate'))
        // dd($profiles);

        // $users = User::where('type', 'instructor')->get();
        // foreach ($users as $user) {
        //     $user['ratings'] = $user->ratings()->avg('rate');
        // }
        // return $users;



        // foreach($profiles as $profile){
        //     $total_rating_sum = 0;
        //     foreach($profile['data']['ratings'] as $rate){
        //         $total_rating_sum += $rate['rating'];
        //     }
        //     if($total_rating_sum > 0){
        //         $profile['data']['avg_rate'] = $total_rating_sum / count($profile['data']['ratings']);
        //     }
        //     else{
        //         $profile['avg_rate'] = 0;
        //     }
            
        // }

    

        // $jobs = Job::with('receivers')->paginate(2)->toArray();

        // if ($req->ajax()) {
        //     if(isset($req->search)){
        //         $jobs = Job::with('receivers')->whereHas('receivers',function($client) use ($req){
        //                 $client->where('first_name','LIKE','%'.$req->search.'%');
        //         })->paginate(2)->toArray();

        //         $view = view('receiver.common.jobs-data',compact('jobs'))->render();
        //         return response()->json(['html'=>$view]);
        //     }
        //     else{
        //         $view = view('receiver.common.jobs-data',compact('jobs'))->render();
        //         return response()->json(['html'=>$view]);
        //     }
        // }

        return view('receiver.dashboard.index',compact('profiles','hired_profiles'));
    }

    public function getReceiver()
    {
        return view('receiver.receiver');
    }
    public function getProvider()
    {
        return view('receiver.provider');
    }
}
