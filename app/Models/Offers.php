<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offers extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['request_id',
    'offer_msg',
    'supplier_id',
    'buyer_id'
    ];

protected $dates = ['created_at','updated_at','deleted_at'];
protected $casts = ['created_at','updated_at','deleted_at'];


public function Users(){

    return $this->belongsTo('\App\Models\Users');

}

public function ServiceRequests(){

    return $this->belongsTo('\App\Models\ServiceRequest');

}


}
