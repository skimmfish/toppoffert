<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceRequests extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'service_cat',
        'customer_id',
        'matched',
        'mission_type',
        'territory',
        'assignment_value',
        'requester_type',
        'when',
        'date_fro',
        'date_to',
        'project_execution_status'
    ];

    protected $casts = ['deleted_at','created_at','updated_at'];
    protected $date = ['created_at','updated_at'];



    /**
     * establishing relationship between users and service_requests model
     */
    public function User(){

        return $this->belongsTo(\App\Models\User);

    }

    

}
