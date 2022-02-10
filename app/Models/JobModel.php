<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClientModel as Client;
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

    public function clients(){
        return $this->belongsTo(Client::class,'user_id','id');
    }
}
