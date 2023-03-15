<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestChats extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'buyer_req_chat';
    protected $fillable = ['buyer_id','supplier_id','message','request_id'];
    protected $dates = ['created_at','updated_at','deleted_at'];


    public function User(){

        return $this->belongsTo('\App\Models\User');
    }
    
}
