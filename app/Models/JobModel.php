<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProviderModel as Provider;
use App\Models\ReceiverModel as Receiver;
use App\Models\ApplyJobModel as ApplyJob;
use App\Models\CategoryModel as Category;
use App\Models\JobResponsibilityModel as Responsibility;
use App\Models\JobRequirementModel as Requirement;
use Cviebrock\EloquentSluggable\Sluggable;

class JobModel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'jobs';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // public function apply(){
    //     return $this->belongsToMany(ApplyJob::class,'post_id','id');
    // }
    
    public function receivers(){
        return $this->belongsTo(Receiver::class,'user_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    // public function responsibilties(){
    //     return $this->belongsToMany(Responsibility::class,'job_responsibilities','post_id','id');
    // }
    // public function requirements(){
    //     return $this->belongsToMany(Requirement::class,'job_requirements');
    // }

}
