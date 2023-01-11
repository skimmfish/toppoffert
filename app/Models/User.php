<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'username',
        'email',
        'password',
        'email_verified_at',
        'is_admin',
        'administrative_level',
        'user_cat',
        'address',
        'city',
        'province',
        'zip_code',
        'phone_no',
        'profile_img'
    ];

    protected $dates = [
        'created_at','updated_at','deleted_at'
    ];


    //creating relationships between the tables
    public function Services(){

    return $this->hasMany('\App\Models\Services');

    }

    public function Ratings(){

        return $this->hasOne('\App\Models\Ratings');
    }

    public function RatingTestimonials(){
        return $this->hasMany('\App\Models\RatingTestimonials');
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
}
