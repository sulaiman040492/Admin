<?php

namespace App\Models;

use App\Notifications\ClientPasswordResetNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\JobModel as Job;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\RatingModel as Rating;

class ProviderModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'providers';

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'service_id',
        'phone_no',
        'date_of_birth',
        'email',
        'password',
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'first_name'
            ]
        ];
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class,'profile_id','id');
    }

    public function sendPasswordResetNotification($token)
    {
        // Your your own implementation.
        $this->notify(new ClientPasswordResetNotification($token));
    }

}
