<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel as Category;
use App\Models\ResponsibilityModel as Responsibility;
use App\Models\RequirementModel as Requirement;
use App\Models\JobResponsibilityModel as JobResponsibility;
use App\Models\JobRequirementModel as JobRequirement;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\JobModel as Job;
use Validator;
use Auth;


class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $res = Responsibility::all();
        $req = Requirement::all();
        return view('client.jobs.create',compact('res','req'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'category_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'no_of_child'=>'required',
            'duration'=>'required',
            'hourly_rate'=>'required',
            'experience'=>'required',
            'description'=>'required',
            'title'=>'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($req->all())
                ->withErrors($validator);
        }

        $cat_id = Category::where('slug',$req->category_id)->select('id')->first();
        $slug = SlugService::createSlug(Job::class, 'slug', $req->title);
        // $days = serialize($req->days);
        if(isset($req->days) && count($req->days) > 0){
            $days = implode(',',$req->days);
        }
        else{
            $days = "";
        }

        if(isset($req->age) && count($req->age) > 0){
            $age = implode(',',$req->age);
        }
        else{
            $age = "";
        }

        $st_time = "";
        $en_time = "";
        if($req->start_time != null){
            $st_time = date('h:i a', strtotime($req->start_time));
        }
        if($req->end_time != null){
            $en_time = date('h:i a', strtotime($req->end_time));
        }

        // $taker = 0;
        // if(Auth::user()->role_id == 3){
        //     $taker = 1;
        // }

           $job = new Job; 
           $job->category_id = $cat_id->id;
           $job->days = $days;
           $job->start_date = $req->start_date;
           $job->end_date = $req->end_date;
           $job->start_time = $st_time;
           $job->end_time = $en_time;
           $job->number_of_children = $req->no_of_child;
           $job->children_ages = $age;
           $job->duration = $req->duration;
           $job->hourly_rate = $req->hourly_rate;
           $job->experience = $req->experience;
           $job->description = $req->description;
           $job->taker = 0;
           $job->user_id = Auth::guard('client')->user()->id;
           $job->title = $req->title;
           $job->slug = $slug;
           $job->plan_id = 0;
           $job->progress_id = 0;
           $job->save();

           $post_id = $job->id;


        if(isset($req->res_ids) && count($req->res_ids) > 0){
            foreach($req->res_ids as $value1){
                $res = new JobResponsibility;
                $res->post_id = $post_id;
                $res->responsibility_id = $value1;
                $res->save();
            }
        }
        if(isset($req->req_ids) && count($req->req_ids) > 0){
            foreach($req->req_ids as $value2){
                $requ = new JobRequirement;
                $requ->post_id = $post_id;
                $requ->requirement_id = $value2;
                $requ->save();
            }
        }

        $req->session()->flash('status', 'Job has been Posted successfully');
        return redirect()->back();

    }

    public function favourite(){
        $jobs = Job::with('clients')->get()->toArray();
       return view('client.jobs.favourite',compact('jobs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function jobtype(){
        $categories = Category::where('is_active',1)->get();
        return view('client.jobs.job-board',compact('categories'));
    }
}
