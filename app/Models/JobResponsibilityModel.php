<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobResponsibilityModel extends Model
{
    use HasFactory;
    protected $table = 'responsibilties';

    public function jobs(){
        return $this->belongToMany(Jobs::class,'job_responsibilities','post_id','id');
    }


}
