<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Responders extends Model
{
    protected $fillable = ['request_id',
    'buyer_id',
    'responder_msg',
    'credit_deducted_for_supplier',
    'time_sent','supplier_id'];
    
    protected $dates = ['created_at','updated_at','deleted_at'];
    
    use HasFactory,SoftDeletes;


    //establishing relations between suppliers and responders model
    public function Suppliers(){

        return $this->belongsTo('\App\Models\Suppliers');
    }
}
