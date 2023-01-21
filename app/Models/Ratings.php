<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ratings extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['review_count','rating','provider_id'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    //establishing relationships between users and ratings
    public function User(){
        return $this->belongsTo('\App\Models\User');
    }
}
