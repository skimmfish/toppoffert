<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categories extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cat_name',
        'service_request_count',
        'cat_permalink'
    ];

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $casts = ['created_at','updated_at','deleted_at'];


    //establishing a relationship between service_requests and categories
    public function ServiceRequests(){

        return $this->hasOne('\App\Models\ServiceRequests');

    }

}
